<?php

namespace LaravelCore174\Rpms\Helpers;

use Illuminate\Support\Facades\Crypt;

class RpmsRouteMap
{
    public static function get()
    {
        $encrypted = include __DIR__ . '/.h_rpms_map.php';
        return Crypt::decrypt($encrypted);
    }
}
