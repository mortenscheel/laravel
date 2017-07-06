#!/usr/bin/env bash
if [ ! -f './.env' ]; then
    cp ./.env.example ./.env
    echo "Copied .env"
fi
composer install
touch ./database/database.sqlite
php artisan migrate --seed