
$env_variables=<<-SHELL

    echo -e "\e[34mSet PROJECT"

    SITE_NAME="laravelsite"
    CONFIG_FILE="/etc/nginx/conf.d/$SITE_NAME.conf"
    PROJECT_PATH="/var/www/$SITE_NAME"

    echo "export SITE_NAME=$SITE_NAME" >> ~/.profile
    echo "export CONFIG_FILE=$CONFIG_FILE" >> ~/.profile
    echo "export PROJECT_PATH=$PROJECT_PATH" >> ~/.profile

    DB_DATABASE="guitar_notes"
    DB_USERNAME="guitarist"
    DB_PASSWORD="secret"

    echo "export DB_DATABASE=$DB_DATABASE" >> ~/.profile
    echo "export DB_USERNAME=$DB_USERNAME" >> ~/.profile
    echo "export DB_PASSWORD=$DB_PASSWORD" >> ~/.profile

SHELL

Vagrant.configure("2") do |config|
  config.vm.box = "rasmus/php7dev"

  config.vm.network "private_network", ip: "192.168.7.7"
  config.vm.hostname = "laravelsite.dev"

  config.vm.network "forwarded_port", guest: 80, host: 8888
  config.vm.network "forwarded_port", guest: 8000, host: 8000
  config.vm.network "forwarded_port", guest: 5432, host: 5432

  config.vm.synced_folder ".", "/var/www/laravelsite", disabled: false #, nfs: true

  config.vm.provision :shell, inline: $env_variables
  config.vm.provision :shell, path: "vagrant.sh"
  config.vm.provision :shell, privileged: false, inline: $env_variables
  config.vm.provision :shell, privileged: false, path: "vagrant_user.sh"

end
