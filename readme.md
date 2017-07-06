## Introduction
This is a fork of Laravel v5.4.23 with a lot of helpful packages pre-installed and pre-configured.

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
* [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar) (dev only)

* [barryvdh/laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper) and [doctrine/dbal](https://github.com/doctrine/dbal) (dev only)<br>
Includes fluent and helpers. Models located in app/Models
* [laracasts/flash](https://github.com/laracasts/flash)
* [zizaco/entrust](https://github.com/Zizaco/entrust)
* [guzzlehttp/guzzle](https://github.com/guzzle/guzzle)
* [laravelcollective/html](https://github.com/LaravelCollective/html)
* [predis/predis](https://github.com/nrk/predis)
* [spatie/laravel-backup](https://github.com/spatie/laravel-backup)<br>
Files and sqlite database are backed up
* [rap2hpoutre/laravel-log-viewer](https://github.com/rap2hpoutre/laravel-log-viewer)<br>
The /logs route requires admin role

## Global configuration
* Logs are created daily and rotated (max 7)
* Separate log files for cli and web
* DB: Default string length set to 191
* DB: Default connection changed to sqlite
* Mail driver changed to log
* All models are stored in app/Models
* Default timezone: Europe/Copenhagen