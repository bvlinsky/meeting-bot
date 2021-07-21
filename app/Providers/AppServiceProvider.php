<?php

namespace App\Providers;

use App\Services\Contracts\MeetingServiceContract;
use App\Services\MeetingService;
use Illuminate\Support\ServiceProvider;
use Laravel\Tinker\TinkerServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    const PACKAGES = [
        TinkerServiceProvider::class,
        BotManServiceProvider::class,
    ];

    const SERVICES = [
        MeetingServiceContract::class => MeetingService::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach (self::PACKAGES as $package) {
            $this->app->register($package);
        }

        foreach (self::SERVICES as $abstract => $concrete) {
            $this->app->bind($abstract, $concrete);
        }
    }
}
