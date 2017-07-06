#!/usr/bin/env bash
if [ ! -f './.env' ]; then
    cp ./.env.example ./.env
    echo "Copied .env"
fi
composer install
php artisan key:generate
touch ./database/database.sqlite
php artisan migrate --seed