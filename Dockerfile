# Use official PHP image
FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip git unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql mbstring bcmath opcache

# Set working directory
WORKDIR /var/www

# Copy composer.json and install dependencies
COPY composer.json /var/www/
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-interaction -vvv

# Copy the rest of your Laravel app
COPY . /var/www

# Expose port 8080
EXPOSE 8080

# Start Laravel's built-in server
CMD php artisan serve --host=0.0.0.0 --port=8080
