<?php

namespace LaravelCore174\Rpms\Actions\Permission;

use Illuminate\Http\Request;
use Maklad\Permission\Models\Permission;

class EditPermission
{
    public function __invoke(Request $request)
    {
        $permission = Permission::find($request->_id);
        if (!empty($permission)) {
            $permission->name = $request->name;
            $permission->save();
            return $permission;
        }

        return null;
    }
}