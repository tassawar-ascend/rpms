<?php

namespace LaravelCore174\Rpms\Filters;

use Closure;

class ActionFilter
{
    public function handle($request, Closure $next)
    {
        // Add hidden logic, if needed (e.g., role-based access)
        return $next($request);
    }
}
