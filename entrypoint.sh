#!/bin/sh
set -e

# Assurez-vous que le répertoire des hydrators est accessible en écriture
mkdir -p /var/www/html/var/doctrine
chown -R www-data:www-data /var/www/html/var/doctrine
chmod -R 777 /var/www/html/var/doctrine

# Attendre que MySQL soit prêt
until mysqladmin ping -h"mysql" -u root -ptoto --silent; do
    echo 'waiting for mysql to be connectable...'
    sleep 3
done

# Attendre que le script SQL initial soit exécuté
while ! mysql -h"mysql" -u root -ptoto -e "use arcadia_db"; do
    echo "waiting for the initial SQL script to be executed..."
    sleep 3
done

# Exécuter les migrations
# php bin/console doctrine:migrations:migrate --no-interaction --allow-no-migration || true

# Charger les fixtures
# php bin/console doctrine:fixtures:load --no-interaction

# Démarrer le superviseur
exec "$@"
