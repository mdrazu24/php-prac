FROM php:8.0.2-fpm
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www
# this means www folder will be  the project directory. If www doesn't exist it will create it.
# I'm not copying everything through this script. Follow composer for more details.
# 
