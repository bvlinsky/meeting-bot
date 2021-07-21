<?php

namespace App\Console;

use App\Console\Commands\TelegramRegister;
use App\Console\Commands\Test;
use App\Jobs\Reminder;
use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Test::class,
        TelegramRegister::class,
    ];

    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->job(new Reminder)->everyFifteenMinutes();
    }
}
