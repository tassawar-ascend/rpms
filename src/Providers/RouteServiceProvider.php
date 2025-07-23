<?php

namespace LaravelCore174\Rpms\Providers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerEncryptedRoutes();
    }

    protected function registerEncryptedRoutes()
    {
        $encryptedPath = __DIR__ . '/../Helpers/.h_rpms_map.php';

        if (!file_exists($encryptedPath)) {
            throw new \RuntimeException("Encrypted RPMS route map not found at: $encryptedPath");
        }

        $encrypted = include $encryptedPath;

        if (!is_string($encrypted)) {
            throw new \UnexpectedValueException("Encrypted RPMS route map must return a string.");
        }

        try {
            $map = Crypt::decrypt($encrypted);
        } catch (\Exception $e) {
            throw new \RuntimeException("Failed to decrypt RPMS route map: " . $e->getMessage());
        }

        foreach ($map as $uri => $route) {
            Route::middleware($route['middleware'] ?? [])
                ->{$route['method']}($uri, $route['action']);
        }
    }
}