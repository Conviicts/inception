FROM debian:buster

ARG MYSQL_DATABASE
ARG MYSQL_USER
ARG MYSQL_PASSWORD

RUN apt-get update
RUN apt-get install -y mariadb-server

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf
COPY ./db.sql /tmp

EXPOSE 3306

RUN service mysql start && \
    sed -i "s/S&R_MYSQL_DATABASE/${MYSQL_DATABASE}/g" /tmp/db.sql && \
    sed -i "s/S&R_MYSQL_USER/${MYSQL_USER}/g" /tmp/db.sql && \
    sed -i "s/S&R_MYSQL_PASSWORD/${MYSQL_PASSWORD}/g" /tmp/db.sql && \
    mysql -u root < /tmp/db.sql;

CMD ["mysqld"]