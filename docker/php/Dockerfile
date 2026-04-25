FROM php:8.2-fpm

# Build arguments (important)
ARG UID=1000
ARG GID=1000

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev \
    zip unzip git curl \
    && docker-php-ext-install pdo pdo_pgsql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Match container user with host user
RUN groupmod -g ${GID} www-data \
    && usermod -u ${UID} -g ${GID} www-data

# Switch to that user
USER www-data
