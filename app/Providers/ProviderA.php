<?php

namespace App\Providers;

use App\Http\Middleware\MiddlewareA;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ProviderA extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Route::prependMiddlewareToGroup('web', MiddlewareA::class);
    }
}
