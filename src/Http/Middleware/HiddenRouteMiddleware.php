<?php

namespace LaravelCore174\Rpms\Http\Middleware;

use Closure;

class HiddenRouteMiddleware
{
    public function handle($request, Closure $next)
    {
        // You can customize this to add IP check, headers, etc.
        return $next($request);
    }
}