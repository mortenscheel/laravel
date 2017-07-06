This is a fork of Laravel v5.4.23 with some helpful packages pre-installed and pre-configured.

## Installation
```shell
git clone https://github.com/mortenscheel/laravel targetFolder
cd targetFolder
./init.sh
```
The init script does the following:
1. Remove the git repo.
2. Copy .env.example to .env
3. Install composer packages (see Packages).
4. Generate application key
5. Initialize an sqlite database file (requires sqlite - otherwise edit the database configuration before running the script).
6. Migrate database tables.
7. Seed an "admin" Role and an Admin user (default admin@admin.com / password).

## Packages
* barryvdh/laravel-debugbar (dev only)
* barryvdh/laravel-ide-helper and doctrine/dbal (dev only)
* laracasts/flash
* zizaco/entrust
* guzzlehttp/guzzle
* laravelcollective/html
* predis/predis
* spatie/laravel-backup
* rap2hpoutre/laravel-log-viewer