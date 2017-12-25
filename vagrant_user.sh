#!/usr/bin/env bash

source ~/.profile
echo "-------------------------------------------------"
echo "User: $USER"
echo "Site name: $SITE_NAME"
echo "Config file: $CONFIG_FILE"
echo "Project path: $PROJECT_PATH"
echo "-------------------------------------------------"

echo "---- Install composer ----"
cd $PROJECT_PATH
composer install

echo "---- Install NVM ----"
sudo apt-get install build-essential libssl-dev

curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.33.8/install.sh | bash

cat >> ~/.profile <<EOF
export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && . "$NVM_DIR/nvm.sh" # This loads nvm
EOF

sudo su - $USER
. ~/.profile

#npm_path=$(command -v nvm)
echo "---- NPM path: $NVM_DIR ----"

echo "---- Install NODE ----"
nvm install node
node install

echo "---- Install bower ----"
npm install -g bower

bower_file="bower.json"
if [ -f "$bower_file" ]
then
    echo "---- Install bower dependency ----"
    bower install
else
    echo "---- No bower.json present ----"
fi
