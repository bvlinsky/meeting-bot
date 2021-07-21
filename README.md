# 📙 Meeting Manager Bot

[![License](https://img.shields.io/github/license/bvlinsky/meeting-bot)](https://github.com/bvlinsky/meeting-bot/main/LICENSE)
[![Issues](https://img.shields.io/github/issues/bvlinsky/meeting-bot)](https://github.com/bvlinsky/meeting-bot/issues)

A bot to simplify meeting management. Powered by [Lumen](https://lumen.laravel.com/) and [Botman](https://botman.io/).

## Setup
To run this project you need [Docker](https://www.docker.com/) and [GNU Make](https://www.gnu.org/software/make/).

Clone this repo and type to create docker image:
```
make init
```

If you have already initialized the project you can run it through the command:
```
make up
```

To enter a container use:
```
make bash
```

## Testing
You can manually test the bot in the console using:
```
php artisan bot:test
```

You can run tests automatically with the command:
```
composer test
```
