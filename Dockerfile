FROM debian:buster

RUN apt-get update && apt-get install -y nginx && apt-get install -y wget
COPY srcs/*.sh ./
COPY srcs/config.inc.php /usr/share/phpmyadmin/
COPY srcs/wordpress.sql .
RUN ./install.sh
COPY srcs/default /etc/nginx/sites-available/
COPY srcs/wp-config.php /var/www/html/wordpress/
COPY srcs/nginx-selfsigned.key /etc/ssl/private/
COPY srcs/nginx-selfsigned.crt /etc/ssl/certs/
COPY srcs/default_sites_available /etc/nginx/sites-available/default
RUN echo "daemon off;" >> /etc/nginx/nginx.conf
CMD sh start.sh
