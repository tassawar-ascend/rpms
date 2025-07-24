<?php

namespace LaravelCore174\Rpms;

use Illuminate\Support\ServiceProvider;
use LaravelCore174\Rpms\Contracts\RoleDependencyActionsInterface;
use LaravelCore174\Rpms\Contracts\PermissionDependencyActionsInterface;
use LaravelCore174\Rpms\Support\RpmsCoreLoader;
use LaravelCore174\Rpms\Support\RoleDependencyActions;
use LaravelCore174\Rpms\Support\PermissionDependencyActions;

class RpmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        RpmsCoreLoader::load(__DIR__ . '/rpms_core.enc');
    }

    public function register()
    {
        $this->app->bind(RoleDependencyActionsInterface::class, RoleDependencyActions::class);
        $this->app->bind(PermissionDependencyActionsInterface::class, PermissionDependencyActions::class);
    }
}