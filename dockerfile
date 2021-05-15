FROM php:8.0-cli
RUN pecl install mongodb
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    unzip
RUN docker-php-ext-install zip
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-enable mongodb && docker-php-ext-install pcntl
CMD tail -f /dev/null
