FROM debian:buster

RUN apt-get update
RUN apt-get install -y openssl nginx

COPY conf/default /etc/nginx/sites-enabled/
COPY conf/localhost.key /etc/nginx/ssl/
COPY conf/localhost.pem /etc/nginx/ssl/
COPY conf/index.html /var/www/localhost

CMD ["nginx", "-g", "daemon off;"]

EXPOSE 443