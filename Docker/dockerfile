# Use the official PHP image with Apache as a base image
FROM php:apache

# Copy the contents of the current directory into the container at /var/www/html
# Install the mysqli PHP extension
RUN docker-php-ext-install mysqli

# Expose port 80 to allow outside access to your web server
EXPOSE 80
