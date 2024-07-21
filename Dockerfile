FROM php:8.3.9-fpm
LABEL authors="René"

# Installer les extensions PHP nécessaires
RUN apt update && apt install -y \
    libpng-dev \
    libjpeg-dev \
    libzip-dev \
    libfreetype6-dev \
    libonig-dev \
    libxslt1-dev \
    unzip \
    build-essential \
    git \
    nginx \
    libssl-dev \
    default-mysql-client \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-enable opcache \
    && docker-php-ext-install xsl \
    && docker-php-ext-install zip \
    && docker-php-ext-install intl \
    && docker-php-ext-install soap \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb

# Installer Composer
COPY --from=composer:2.7.7 /usr/bin/composer /usr/bin/composer

# Copier les fichiers de l'application
WORKDIR /var/www/html

COPY . .

COPY build/nginx/conf/default.conf /etc/nginx/conf.d/default.conf
COPY build/php/custom.ini /usr/local/etc/php/conf.d/

COPY entrypoint.sh /usr/local/bin/entrypoint.sh

# Rendre le script exécutable
RUN chmod +x /usr/local/bin/entrypoint.sh
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Installer les dépendances Composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install --no-interaction --optimize-autoloader

# Configurer les permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Assurez-vous que le répertoire des hydrators est accessible en écriture
RUN mkdir -p /var/www/html/var/doctrine \
    && chown -R www-data:www-data /var/www/html/var/doctrine \
    && chmod -R 777 /var/www/html/var/doctrine

# Exposer le port 9000
EXPOSE 9000

# Démarrer Apache
# CMD service nginx start && php-fpm
# Utiliser supervisord pour gérer les processus
RUN apt-get install -y supervisor
COPY build/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

ENTRYPOINT ["entrypoint.sh"]
CMD ["supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]