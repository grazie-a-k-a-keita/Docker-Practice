FROM php:8.2.17RC2-zts-bullseye

RUN apt-get update
RUN apt-get install -y iputils-ping

RUN docker-php-ext-install pdo_mysql
