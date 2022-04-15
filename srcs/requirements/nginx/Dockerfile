FROM debian:buster

RUN apt-get update
RUN apt-get install -y openssl nginx

COPY conf/admin.conf /etc/nginx/conf.d/
COPY entrypoint.sh .

EXPOSE 443

CMD ["bash", "entrypoint.sh"]
