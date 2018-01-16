#!/bin/bash

echo "-------------------------------------------------"
echo "User: $USER"
echo "Site name: $SITE_NAME"
echo "Config file: $CONFIG_FILE"
echo "Project path: $PROJECT_PATH"
echo "-------------------------------------------------"

function create_certificate {
    site_name=$1
    openssl req -newkey rsa:2048 -x509 -nodes -keyout "$site_name.key" \
     -new -out "$site_name.cert" -subj /CN=$site_name -reqexts \
     SAN -extensions SAN -config \
     <(cat /etc/ssl/openssl.cnf <(printf "[SAN]\nsubjectAltName=DNS:$site_name")) \
     -sha256 -days 3650

}
function create_config_file {
    site_name=$1
    config_file=$2
    project_path=$3

    cat << EOF > $CONFIG_FILE
server {
    listen			443 ssl;
    server_name $site_name.dev www.$site_name.dev;

    ssl    on;
    ssl_certificate        /etc/nginx/ssl/$site_name.cert;
    ssl_certificate_key    /etc/nginx/ssl/$site_name.key;

    root $project_path/public;
    index index.php index.html index.htm;
    access_log /var/log/nginx/$site_name.log;
    error_log /var/log/nginx/$site_name.error.log;

    location / {
        try_files \$uri \$uri/ /index.php?\$query_string;
    }

    location ~ \.php$ {
        try_files \$uri /index.php =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/var/run/php-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
        include fastcgi_params;
    }
}

# Redirect to ssl
server {
    listen 80;
    server_name $site_name.dev www.$site_name.dev;

    return 301 https://$site_name.dev\$request_uri;
}
EOF
}

echo "---- Install PHP 7.2 ----"
cd php-src
git pull -r
git checkout HEAD -f
git checkout PHP-7.2
make distclean
./buildconf -f
./cn
make
make install
newphp 72 debug

echo "---- Install Xdebug ----"
cd ~/src/xdebug
git pull
./rebuild.sh
mkdir /etc/php72
echo "zend_extension=\"xdebug.so\"" > /etc/php72/php.ini

mkdir /etc/php72/conf.d
cat << EOF > /etc/php72/conf.d/xdebug.ini
xdebug.idekey="PHPStorm"
xdebug.remote_enable = 1
xdebug.remote_connect_back = 1
xdebug.remote_autostart = 1
xdebug.remote_port = 9000
xdebug.remote_handler=dbgp
EOF
newphp 72 debug

echo "---- Create ssl certificate ----"
mkdir /etc/nginx/ssl

if [ -f "/etc/nginx/ssl/$SITE_NAME.key" ]
then
    echo "#### Certificate already exist ####"
else
    echo "#### Create Certificate ####"
    cd /etc/nginx/ssl
    create_certificate $SITE_NAME
fi

if [ -f "$CONFIG_FILE" ]
then
    echo "#### Update nginx config ####"
    rm $CONFIG_FILE
    create_config_file $SITE_NAME $CONFIG_FILE $PROJECT_PATH
else
    echo "#### Create nginx config ####"
    create_config_file $SITE_NAME $CONFIG_FILE $PROJECT_PATH
fi

echo "---- Restart nginx ----"
service nginx restart

echo "---- Install PostgreSQL 10 ----"
wget -q https://www.postgresql.org/media/keys/ACCC4CF8.asc -O - | sudo apt-key add -
sh -c 'echo "deb http://apt.postgresql.org/pub/repos/apt/ jessie-pgdg main" >> /etc/apt/sources.list.d/pgdg.list'

apt-get update
apt-get -y install postgresql postgresql-contrib

echo "---- Creating a New User and Database ----"
echo "Database: $DB_DATABASE"
echo "Username: $DB_USERNAME"
echo "Password: $DB_PASSWORD"
echo "------------------------------------------"

sudo -u postgres createuser $DB_USERNAME
sudo -u postgres createdb $DB_DATABASE

sudo -u postgres psql -c "ALTER USER $DB_USERNAME WITH ENCRYPTED PASSWORD '$DB_PASSWORD';"
sudo -u postgres psql -c "GRANT ALL PRIVILEGES ON DATABASE $DB_DATABASE TO $DB_USERNAME;"
