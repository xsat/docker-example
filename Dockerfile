FROM php:7.4.12-fpm
RUN apt-get update && apt-get install -y \
    git \
    libzip-dev \
    zip \
    unzip
RUN echo "cgi.fix_pathinfo=0;" > /usr/local/etc/php-fpm.d/php.ini
RUN docker-php-ext-install pcntl

WORKDIR /usr/share/nginx/docker_example
ADD . .
