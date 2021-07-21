<?php

namespace App\Console\Commands;

use App\Console\Drivers\ConsoleDriver;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\ArrayCache;
use Clue\React\Stdio\Stdio;
use Illuminate\Console\Command;
use React\EventLoop\Factory;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bot:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test your bot in console.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $app = app('app');
        $loop = Factory::create();

        $app->singleton('botman', function ($app) use ($loop) {
            $config = config('botman', []);
            $botman = BotManFactory::create($config, new ArrayCache());

            $stdio = new Stdio($loop);
            $stdio->setPrompt('You: ');

            $botman->setDriver(new ConsoleDriver($config, $stdio));

            $stdio->on('data', function ($line) use ($botman) {
                $botman->listen();
            });

            return $botman;
        });

        if (file_exists('routes/botman.php')) {
            require base_path('routes/botman.php');
        }

        $loop->run();
    }
}
