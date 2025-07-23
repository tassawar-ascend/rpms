<?php

namespace LaravelCore174\Rpms;

use Illuminate\Support\ServiceProvider;
use LaravelCore174\Rpms\Support\EncryptedRouteLoader;

class RpmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        EncryptedRouteLoader::load(__DIR__ . '/rpms_core.enc');
    }

    public function register()
    {
        //
    }
}