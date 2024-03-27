<?php

namespace App\Providers;

use App\Service\UserService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(UserService::class, function (Application $app) {
            return new UserService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    public function provides(): array
    {
        return [UserService::class];
    }
}
