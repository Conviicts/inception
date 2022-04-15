#! /bin/bash

if [ -z "$MYSQL_DATABASE" ]
then
	>&2 echo '$MYSQL_DATABASE value not found, abort'
	exit 1
fi
if [ -z "$MYSQL_HOST" ]
then
	>&2 echo '$MYSQL_HOST value not found, abort'
	exit 1
fi
if [ -z "$MYSQL_USER" ]
then
	>&2 echo '$MYSQL_USER value not found, abort'
	exit 1
fi

if [ -z "$MYSQL_PASSWORD" ]
then
	>&2 echo '$MYSQL_PASSWORD value not found, abort'
	exit 1
fi

sed -i "s/S&R_MYSQL_DB/${MYSQL_DATABASE}/g" wp-config.php
sed -i "s/S&R_MYSQL_USER/${MYSQL_USER}/g" wp-config.php
sed -i "s/S&R_MYSQL_PASSWORD/${MYSQL_PASSWORD}/g" wp-config.php
sed -i "s/S&R_MYSQL_HOST/${MYSQL_HOST}/g" wp-config.php


mkdir -p /run/php
wget https://fr.wordpress.org/wordpress-5.9.3-fr_FR.tar.gz
tar xvf wordpress-5.9.3-fr_FR.tar.gz
mv wordpress /var/www/
mv wp-config.php /var/www/wordpress/

echo "listen = 0.0.0.0:9000" >> /etc/php/7.3/fpm/pool.d/www.conf

php-fpm7.3 -F