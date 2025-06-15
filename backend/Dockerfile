FROM php:8.2-apache

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip

RUN docker-php-ext-install zip pdo pdo_mysql

RUN a2enmod rewrite headers

COPY . .

RUN chown -R www-data:www-data /var/www/html
