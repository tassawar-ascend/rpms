<?php

namespace LaravelCore174\Rpms\Actions\Permission;

class IndexPermission
{
    public function __invoke()
    {
        return response()->json(['message' => 'Permission Index']);
    }
}