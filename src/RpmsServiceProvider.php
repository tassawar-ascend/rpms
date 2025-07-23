<?php

namespace LaravelCore174\Rpms;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RpmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //$this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->loadRpmsCleanRoutes();
    }

    protected function loadRpmsCleanRoutes()
    {
        $mapFile = __DIR__ . '/.h_rpms_map.php';

        if (!file_exists($mapFile)) {
            return;
        }

        $routes = include $mapFile;

        foreach ($routes as $alias => $route) {
            $method = strtolower($route['method']);
            $uri = $route['uri'];
            $action = $route['action'];
            $middleware = $route['middleware'] ?? [];

            Route::$method($uri, $action)->middleware($middleware);
        }
    }

    public function register()
    {
        //
    }
}
