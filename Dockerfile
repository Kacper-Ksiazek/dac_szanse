# Use the official PHP image as a base
FROM php:7.2-fpm

# Install required extensions
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd zip

# Set working directory
WORKDIR /var/www

# Copy the composer.lock and composer.json files
COPY composer.json composer.lock ./

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Self-update Composer to the latest version
RUN composer self-update

# Install PHP dependencies
RUN composer install --no-autoloader --no-scripts

# Copy the rest of your application files
COPY . .

# Run Composer autoload
RUN composer dump-autoload

# Expose the port your app runs on
EXPOSE 8000

# Start the PHP built-in server on all interfaces
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
