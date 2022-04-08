init: docker-down docker-build docker-pull docker-up docker-composer-install

docker-up:
	docker-compose up -d

docker-pull:
	docker-compose pull

docker-build:
	docker-compose build

docker-down:
	docker-compose down --remove-orphans

docker-composer-install:
	docker-compose run --rm api-php-cli composer install
