.PHONY: build up down stop

build:
	docker-compose build

up:
	docker-compose up -d --remove-orphans

down:
	docker-compose down

stop:
	docker-compose kill
	docker-compose rm -f