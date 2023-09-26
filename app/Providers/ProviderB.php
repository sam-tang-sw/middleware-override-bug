<?php

namespace App\Providers;

use App\Http\Middleware\MiddlewareB;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider;

class ProviderB extends ServiceProvider
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
        /** @var \Illuminate\Foundation\Http\Kernel $kernel */
        $kernel = app()->make(Kernel::class);

        /**
         * Kernel syncMiddlewareToRouter will override router middleware group.
         */
        $kernel->appendMiddlewareToGroup('api', MiddlewareB::class);
        $kernel->prependMiddlewareToGroup('api', MiddlewareB::class);
        $kernel->appendToMiddlewarePriority(MiddlewareB::class);
        $kernel->prependToMiddlewarePriority(MiddlewareB::class);
    }
}
