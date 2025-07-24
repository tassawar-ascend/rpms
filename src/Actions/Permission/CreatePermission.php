<?php

namespace LaravelCore174\Rpms\Actions\Permission;

use Illuminate\Http\Request;
use Maklad\Permission\Models\Permission;

class CreatePermission
{
    public function __invoke(Request $request)
    {
        return Permission::create([
            'guard_name' => 'web',
            'name' => $request->name,
            'module_id' => $request->module_id
        ]);
    }
}