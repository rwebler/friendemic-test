FROM php:7.2.0-fpm

RUN apt-get update && apt-get install -y openssl \
    libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick
