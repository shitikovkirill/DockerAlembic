#!/usr/bin/env bash

echo "Install composer"
cd $project_path
composer install

echo "Install NVM"
sudo apt-get update
sudo apt-get install build-essential libssl-dev

curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.33.8/install.sh | bash

cat <<EOF >> ~/.bash_profile
export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && . "$NVM_DIR/nvm.sh" # This loads nvm
EOF

sudo su - $USER
source ~/.bash_profile

npm_path=$(command -v nvm)
echo "NPM path: $npm_path"

echo "Install NODE"
nvm install node
node install

echo "Install bower"
npm install -g bower
bower install
