FROM php:8.3-apache
RUN apt-get update && apt-get install -y --no-install-recommends libpng-dev libwebp-dev libjpeg62-turbo-dev && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-configure gd --with-webp --with-jpeg && docker-php-ext-install pdo_mysql gd && a2enmod rewrite expires deflate
RUN sed -ri 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf
WORKDIR /var/www/html
COPY . /var/www/html
