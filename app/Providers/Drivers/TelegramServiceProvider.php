<?php

namespace App\Providers\Drivers;

class TelegramServiceProvider extends \BotMan\Drivers\Telegram\Providers\TelegramServiceProvider
{
    public function matchesRequest(): array
    {
        return [];
    }

    public function hasMatchingEvent(): bool
    {
        return false;
    }
}
