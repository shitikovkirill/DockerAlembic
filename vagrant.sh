#!/bin/bash

SITE_NAME="laravelsite"

function create_config_file {
    config_file=$1
    site_name=$2

    echo "Config file: $config_file"
    echo "Site name: $site_name"

    cat << EOF > $config_file
server {
    listen 80 default_server;
    listen [::]:80 default_server ipv6only=on;

    root /var/www/$site_name/public;
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

echo $SITE_NAME
config_file="/etc/nginx/conf.d/$SITE_NAME.conf"

if [ -f "$config_file" ]
then
    echo "Update nginx config"
    rm $config_file
    create_config_file $config_file $SITE_NAME
else
    echo "Create nginx config"
    create_config_file $config_file $SITE_NAME
fi

echo "Restart nginx"
service nginx restart
