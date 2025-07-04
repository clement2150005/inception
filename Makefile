COMPOSE=docker compose -f src/docker-compose.yml

.PHONY: up down build clean fclean re

up:
	$(COMPOSE) up

down:
	$(COMPOSE) down

build:
	$(COMPOSE) build --no-cache

clean:
	$(COMPOSE) down --volumes

re: down clean build
