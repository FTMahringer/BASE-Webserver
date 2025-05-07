FROM php:8.3-fpm

# Install Windows-compatible extensions
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    libxslt-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        gd \
        pdo_mysql \
        mbstring \
        zip \
        opcache \
        exif \
        xsl \
        soap \
        sockets \
    && pecl install redis \
    && docker-php-ext-enable redis

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Configure PHP for Windows host development
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data
WORKDIR /var/www/html

# Copy configuration
COPY php.ini /usr/local/etc/php/conf.d/custom.ini


# Set proper permissions
RUN chown -R www-data:www-data /var/www/html
USER www-data