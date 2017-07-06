#!/usr/bin/env bash
rm -rf .git # Remove git repo after cloning
if [ ! -f './.env' ]; then
    cp ./.env.example ./.env
fi
composer install
php artisan key:generate
touch ./database/database.sqlite
php artisan migrate
php artisan db:seed