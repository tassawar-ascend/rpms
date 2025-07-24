<?php

namespace LaravelCore174\Rpms\Actions\Role;

use Illuminate\Http\Request;
use LaravelCore174\Rpms\Eloquents\Role;

class ListRolePermissions
{
    public function __invoke(Request $request)
    {
        return Role::where('_id', $request->id)->with(['permissions' => function ($q) {
            $q->select('_id', 'name', 'role_ids');
        }])->first();
    }
}
