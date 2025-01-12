# Use the official PHP image with Apache
FROM php:8.0-apache

# Install required extensions for MariaDB
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy custom PHP configuration
COPY php.ini /usr/local/etc/php/

# Copy project files to Apache's root
COPY / /var/www/html/

# Set file permissions
RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 755 /var/www/html/

# Expose port 80
EXPOSE 80
