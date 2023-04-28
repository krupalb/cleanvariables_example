FROM php:7.4-apache

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable pdo_mysql mysqli

# Install MySQL
RUN apt-get update && \
    apt-get install -y default-mysql-server && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

# Copy your PHP application into the container
COPY sim.php /var/www/html/
COPY submit.php /var/www/html/
COPY testdbconn.php /var/www/html/
COPY index.php /var/www/html/

COPY php.ini /usr/local/etc/php/

# Expose port 80 for the web server
EXPOSE 80