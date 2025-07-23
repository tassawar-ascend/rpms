<?php

namespace LaravelCore174\Rpms\Support;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Routing\Route;
use Illuminate\Routing\Router;

class RpmsCoreLoader
{
    public static function load(string $path): void
    {
        if (!file_exists($path)) {
            return;
        }

        $routes = Crypt::decrypt(file_get_contents($path));
        $router = App::make(Router::class);

        foreach ($routes as $alias => $route) {
            $method = strtoupper($route['method']);
            $uri = 'api/' . ltrim($route['uri'], '/');
            $action = is_array($route['action'])
                ? $route['action'][0] . '@' . $route['action'][1]
                : $route['action'];
            $middleware = $route['middleware'] ?? [];

            $routeObj = new Route([$method], $uri, ['uses' => $action]);
            $routeObj->setContainer(app())->middleware($middleware);
            $router->getRoutes()->add($routeObj);
        }
    }
}