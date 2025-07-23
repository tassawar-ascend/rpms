<?php

namespace LaravelCore174\Rpms\Providers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $encryptedPath = __DIR__ . '/../Helpers/.h_rpms_map.php';

        if (!file_exists($encryptedPath)) {
            throw new \Exception("Encrypted RPMS route map not found.");
        }

        $encrypted = include $encryptedPath;
        $map = Crypt::decrypt($encrypted);

        foreach ($map as $uri => $route) {
            Route::middleware($route['middleware'] ?? [])
                ->{$route['method']}($uri, $route['action']);
        }
    }
}