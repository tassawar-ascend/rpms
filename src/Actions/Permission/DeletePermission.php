<?php

namespace LaravelCore174\Rpms\Actions\Permission;

use Maklad\Permission\Models\Permission;

class DeletePermission
{
    public function __invoke($id)
    {
        $permission = Permission::find($id);
        if (!empty($permission)) {
            $permission->delete();
            return $permission;
        }

        return null;
    }
}