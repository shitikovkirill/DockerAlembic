
Vagrant.configure("2") do |config|
  config.vm.box = "rasmus/php7dev"

  config.vm.network "private_network", ip: "192.168.7.7"
  config.vm.hostname = "laravelsite.dev"

  config.vm.network "forwarded_port", guest: 80, host: 8888
  config.vm.synced_folder ".", "/var/www/laravelsite", disabled: false, nfs: true

  config.vm.provision :shell, path: "bootstrap.sh"

end
