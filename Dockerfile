FROM php:8.1.0alpha3-fpm-alpine

RUN docker-php-ext-install pdo_mysql

WORKDIR /var/www/html/

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .
