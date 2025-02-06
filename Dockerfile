# Utiliser l'image officielle de PHP
FROM php:8.1-fpm

# Définir le répertoire de travail dans le conteneur
WORKDIR /var/www

# Installer les dépendances requises par Laravel
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql

# Copier le fichier composer.lock et composer.json
COPY composer.json composer.lock ./

# Installer Composer (gestionnaire de dépendances PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer les dépendances PHP
RUN composer install --no-dev --optimize-autoloader

# Copier tous les fichiers du projet dans le conteneur
COPY . .

# Donner les bonnes permissions au dossier storage et bootstrap/cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Exposer le port 9000
EXPOSE 9000

# Démarrer PHP-FPM
CMD ["php-fpm"]
