<?php

namespace LaravelCore174\Rpms\Actions\Role;

use Illuminate\Http\Request;
use LaravelCore174\Rpms\Eloquents\Role;

class AssignPermissionToRole
{
    public function __invoke(Request $request)
    {
        $role = Role::find($request->_id);
        
        if (!empty($role)) {
            $role->permissions()->sync($request->permission_ids);
            return $role;
        }

        return null;
    }
}