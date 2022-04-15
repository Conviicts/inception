DOCKER_COMPOSE_FILE = ./srcs/docker-compose.yml

all:	up
up:
	mkdir -p /home/admin/data/wordpress
	mkdir -p /home/admin/data/mariadb
	docker-compose -f $(DOCKER_COMPOSE_FILE) up -d --build
down:
	docker-compose -f $(DOCKER_COMPOSE_FILE) down
start:
	docker-compose -f $(DOCKER_COMPOSE_FILE) start
stop:
	docker-compose -f $(DOCKER_COMPOSE_FILE) stop
ps:
	docker-compose -f $(DOCKER_COMPOSE_FILE) ps
rm: stop
	docker rm mariadb
	docker rm wordpress
	docker rm nginx
	docker volume rm srcs_mariadb
	docker volume rm srcs_wordpress

re: all

.PHONY: all up down start stop
	
