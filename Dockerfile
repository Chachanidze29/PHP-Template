FROM php:8.3-fpm-alpine

LABEL maintainer="Avtandil Chachanidze <chachanidze29m@gmail.com>"

WORKDIR /var/www/html

RUN apk add --no-cache \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    oniguruma-dev \
    autoconf \
    build-base \
    libzip-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    icu-dev \
    bash \
    && docker-php-ext-configure gd --with-jpeg \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl \
    && rm -rf /var/cache/apk/*

COPY . /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --optimize-autoloader --no-dev

EXPOSE 9000

CMD ["php-fpm"]
