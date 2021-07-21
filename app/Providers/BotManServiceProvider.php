<?php

namespace App\Providers;

use App\Providers\Drivers\TelegramServiceProvider;
use BotMan\BotMan\BotManServiceProvider as ServiceProvider;
use BotMan\BotMan\Drivers\DriverManager;

class BotManServiceProvider extends ServiceProvider
{
    /**
     * The drivers that should be loaded to use with BotMan
     */
    const DRIVERS = [
        TelegramServiceProvider::class
    ];

    public function boot(): void
    {
        foreach (self::DRIVERS as $driver) {
            DriverManager::loadDriver($driver);
        }
    }
}
