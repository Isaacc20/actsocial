# Use official PHP image with Apache
FROM php:8.1-apache

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy project files AFTER Composer is available
COPY . .

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Prevent Composer crash on missing APP_KEY
RUN cp .env.example .env

# Install php dependencies
RUN composer install --no-dev --optimize-autoloader

# Clear and cache config/routes/views
RUN php artisan config:clear || true && \
    php artisan route:clear || true && \
    php artisan view:clear || true

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
