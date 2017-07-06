#!/usr/bin/env bash
rm -rf .git # Remove git repo after cloning
if [ ! -f './.env' ]; then
    cp ./.env.example ./.env > /dev/null
    echo "Copied .env file"
fi
composer install > /dev/null
echo "Installed composer packages"
php artisan key:generate
touch ./database/database.sqlite > /dev/null
echo "Added sqlite DB"
php artisan migrate > /dev/null
echo "Migrated DB tables"
php artisan db:seed