#!/bin/bash

##----- INSTALL MySQL -----##
export DEBIAN_FRONTEND=noninteractive
echo 'mysql-apt-config mysql-apt-config/select-server select mysql-5.7' | debconf-set-selections
wget https://dev.mysql.com/get/mysql-apt-config_0.8.13-1_all.deb
apt-get install -y lsb-release
apt-get install -y gnupg
dpkg -i mysql-apt-config*
apt-get update
apt-get install -y mysql-server

##----- INSTALL PHP -----##
apt-get install -y php-fpm php-mysql

##----- INSTALL PHPMYADMIN -----#
apt-get install -y php-json php-mbstring
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
tar -zxvf phpMyAdmin-4.9.0.1-all-languages.tar.gz
mv phpMyAdmin-4.9.0.1-all-languages/* /usr/share/phpmyadmin/
ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin
chown -R www-data:www-data /usr/share/phpmyadmin
chown -R mysql:mysql /var/lib/mysql /var/run/mysqld
service mysql start
mysql -u root -e "CREATE USER 'admin' IDENTIFIED BY 'admin';"
mysql -u root -e "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;"
mysql -u root wordpress < wordpress.sql
mysql -u root -e "GRANT ALL ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'admin'"
mysql -u root < /usr/share/phpmyadmin/sql/create_tables.sql

##----- INSTALL WORDPRESS -----##
apt-get install -y curl
curl -O https://wordpress.org/latest.tar.gz
tar xzvf latest.tar.gz
mv wordpress/ /var/www/html/wordpress/

