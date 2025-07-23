<?php

namespace LaravelCore174\Rpms;

use Illuminate\Support\ServiceProvider;

class RpmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        app('router')->aliasMiddleware('rpms.x', \LaravelCore174\Rpms\Filters\ActionFilter::class);
    }
}