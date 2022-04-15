FROM debian:buster

RUN apt-get update
RUN apt-get install -y wget php-cgi php-common php-fpm php-pear php-mbstring php-zip \
	php-net-socket php-gd php-xml-util php-gettext php-mysql php-bcmath

COPY /conf/wp-config.php .
COPY entrypoint.sh .

EXPOSE 9000

ENTRYPOINT ["bash", "entrypoint.sh"]
