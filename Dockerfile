# Latest composer to get the dependencies
FROM composer:2.3.10 as build
WORKDIR /app
COPY  . /var/www/html
# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# RUN composer install && composer dumpautoload


# PHP Apache docker image for php8.1
FROM php:8.1.0RC5-apache-buster

# Adds library support for different image upload
RUN apt update && apt install -y zlib1g-dev libpng-dev libwebp-dev libjpeg-dev libfreetype6-dev && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo pdo_mysql

# Adds gd library support for different image upload
RUN docker-php-ext-configure gd --with-jpeg --with-webp --with-freetype
RUN docker-php-ext-install gd
# RUN php artisan optimize:clear

# Expose port 80 for web server
EXPOSE 80

# Copy the source code including artisan file to the container
COPY --from=build /app /var/www/

# Set appropriate permissions
RUN chown -R www-data:www-data /var/www/
RUN mkdir -p /var/www/storage/framework/{sessions,views,cache}
RUN chmod -R 755 /var/www/storage
RUN chmod -R 755 /var/www/bootstrap/cache

# RUN chmod 777 -R /var/www/storage/
# RUN chown -R www-data:www-data /var/www/

# Configure Apache for Laravel
COPY docker/000-default.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite
