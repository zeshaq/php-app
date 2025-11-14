# Use the official PHP image with Apache
FROM php:8.2-apache

# Copy the application code into the web server's root directory
COPY index.php /var/www/html/

# Expose port 80
EXPOSE 80
