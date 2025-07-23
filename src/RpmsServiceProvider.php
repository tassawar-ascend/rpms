<?php

namespace LaravelCore174\Rpms;

use Illuminate\Support\ServiceProvider;
use LaravelCore174\Rpms\Support\RpmsCoreLoader;

class RpmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        RpmsCoreLoader::load(__DIR__ . '/rpms_core.enc');
    }

    public function register()
    {
        //
    }
}