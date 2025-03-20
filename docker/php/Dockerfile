
FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    libzip-dev zip git unzip libpq-dev wget \
    && docker-php-ext-install pdo pdo_mysql zip

# Téléchargement et installation de la Symfony CLI
RUN wget https://get.symfony.com/cli/installer -O symfony-installer.sh \
    && bash symfony-installer.sh \
    && mv /root/.symfony*/bin/symfony /usr/local/bin/symfony \
    && rm symfony-installer.sh


WORKDIR /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
