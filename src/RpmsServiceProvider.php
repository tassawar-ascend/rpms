<?php

namespace LaravelCore174\Rpms;

use Illuminate\Support\ServiceProvider;

class RpmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(function () {
            $encryptedMap = include __DIR__.'/../../.h_rpms_map.php';

            foreach ($encryptedMap as $alias => $route) {
                \Route::middleware($route['middleware'] ?? [])
                    ->{$route['method']}($route['uri'], $route['action']);
            }
        });
    }
}