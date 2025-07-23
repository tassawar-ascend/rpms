<?php

namespace LaravelCore174\Rpms;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class RpmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //$this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->loadRpmsCleanRoutes();
    }

    protected function loadRpmsCleanRoutes()
    {
        $mapFile = base_path('vendor/laravelcore174/rpms/.h_rpms_map.php');

        if (!file_exists($mapFile)) return;

        $mappings = include $mapFile;

        foreach ($mappings as $module) {
            $prefix = $module['prefix'];

            foreach ($module['routes'] as $routeKey => $actionName) {
                [$method, $uri] = explode(' ', $routeKey, 2);
                $method = strtolower($method);

                Route::$method($uri, function (...$args) use ($prefix, $actionName) {
                    $a = base64_encode($actionName);
                    $query = http_build_query(request()->query());
                    $idParams = collect($args)->map(fn($v, $k) => 'id=' . $v)->implode('&');
                    $extra = $query ? "&$query" : '';
                    $params = $idParams . $extra;

                    return redirect()->to("api/{$prefix}?a={$a}" . ($params ? "&$params" : ''))
                                     ->withInput(request()->all());
                });
            }
        }
    }

    public function register()
    {
        //
    }
}
