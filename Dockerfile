FROM php:8.3-apache
RUN docker-php-ext-install pdo_mysql gd && a2enmod rewrite expires deflate
RUN sed -ri 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf
WORKDIR /var/www/html
COPY . /var/www/html
