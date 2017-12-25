#!/bin/bash

echo "-------------------------------------------------"
echo "User: $USER"
echo "Site name: $SITE_NAME"
echo "Config file: $CONFIG_FILE"
echo "Project path: $PROJECT_PATH"
echo "-------------------------------------------------"

function create_config_file {
    site_name=$1
    config_file=$2
    project_path=$3

    cat << EOF > $CONFIG_FILE
server {
    listen 80 default_server;
    listen [::]:80 default_server ipv6only=on;

    root $project_path/public;
    index index.php index.html index.htm;
    access_log /var/log/nginx/$site_name.log;
    error_log /var/log/nginx/$site_name.error.log;

    server_name $site_name.dev www.$site_name.dev;

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
EOF
}

apt-get update

if [ -f "$CONFIG_FILE" ]
then
    echo "---- Update nginx config ----"
    rm $CONFIG_FILE
    create_config_file $SITE_NAME $CONFIG_FILE $PROJECT_PATH
else
    echo "---- Create nginx config ----"
    create_config_file $SITE_NAME $CONFIG_FILE $PROJECT_PATH
fi

echo "---- Restart nginx ----"
service nginx restart
