chown -R mysql:mysql /var/lib/mysql /var/run/mysqld
service mysql start
service php7.3-fpm start
service nginx start
