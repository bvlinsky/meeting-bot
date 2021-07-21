<?php

use App\Testing\BotManTester;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Drivers\Tests\FakeDriver;
use BotMan\BotMan\Drivers\Tests\ProxyDriver;
use Laravel\Lumen\Application;
use Laravel\Lumen\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected BotMan $botman;

    protected BotManTester $bot;

    /**
     * Creates the application.
     */
    public function createApplication(): Application
    {
        $app = require __DIR__ . '/../bootstrap/app.php';

        DriverManager::loadDriver(ProxyDriver::class);
        $fakeDriver = new FakeDriver;
        ProxyDriver::setInstance($fakeDriver);

        $this->botman = $app->make('botman');
        $this->bot = new BotManTester($this->botman, $fakeDriver);

        return $app;
    }
}
