FROM php:8.3.9-fpm-alpine3.20

COPY . /app

# get composer binary from image
COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

VOLUME ["/app"]

WORKDIR app/public

RUN docker-php-ext-install pdo pdo_mysql