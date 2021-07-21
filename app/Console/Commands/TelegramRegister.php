<?php

namespace App\Console\Commands;

use BotMan\Drivers\Telegram\Console\Commands\TelegramRegisterCommand;

class TelegramRegister extends TelegramRegisterCommand
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'telegram:register {--remove} {--output}';

}
