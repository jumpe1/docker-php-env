FROM php:7.4-apache

RUN apt update \
    && apt install -y libpq-dev \
    && docker-php-ext-install pdo_mysql pdo_pgsql

