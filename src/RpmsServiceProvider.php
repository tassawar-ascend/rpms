<?php

namespace LaravelCore174\Rpms;

use Illuminate\Support\ServiceProvider;

class RpmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
    }
}