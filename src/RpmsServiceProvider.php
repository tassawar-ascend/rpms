<?php

namespace LaravelCore174\Rpms;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use LaravelCore174\Rpms\Http\Middleware\HiddenRouteMiddleware;

class RpmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->app['router']->aliasMiddleware('hidden.route', HiddenRouteMiddleware::class);
    }

    public function register()
    {
        //
    }
}
