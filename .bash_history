sudo apt update && sudo apt upgrade -y
sudo apt install php php-cli php-mbstring php-xml php-curl php-bcmath php-mysql php-zip php-tokenizer php-common unzip curl git nginx mysql-server -y
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
composer --version
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
composer --version
sudo mysql_secure_installation
sudo mysql -u root
scp -i ~/Downloads/laravel-key.pem ~/Downloads/esc.sql ubuntu@3.95.62.41:/home/ubuntu/
mysql -u admin -p byte < /home/ubuntu/esc.sql
mysql -u admin -p -e "CREATE DATABASE byte;"
mysql -u admin -p byte < /home/ubuntu/esc.sql
scp -i ~/Downloads/laravel-key.pem ~/Downloads/Archive.zip ubuntu@3.95.62.41:/home/ubuntu/
scp -i ~/Downloads/laravel-key.pem ~/Downloads/Archive.zip ubuntu@<EC2_PUBLIC_IP>:/home/ubuntu/
exit
