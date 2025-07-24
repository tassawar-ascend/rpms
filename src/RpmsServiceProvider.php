<?php

namespace LaravelCore174\Rpms;

use Illuminate\Support\ServiceProvider;
use LaravelCore174\Rpms\Contracts\RoleDependencyActionsInterface;
use LaravelCore174\Rpms\Support\RpmsCoreLoader;
use LaravelCore174\Rpms\Support\DependencyActions;

class RpmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        RpmsCoreLoader::load(__DIR__ . '/rpms_core.enc');
    }

    public function register()
    {
        $this->app->bind(RoleDependencyActionsInterface::class, DependencyActions::class);
    }
}