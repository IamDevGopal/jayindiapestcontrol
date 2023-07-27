<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\SessionGuard;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Auth::extend('admin', function ($app, $name, array $config) {
            // Return an instance of your custom admin guard here
            return new SessionGuard('admin', Auth::createUserProvider($config['provider']), $app->make('session.store'));
        });
    }
}
