<?php

namespace LaravelCore174\Rpms\Actions\Role;

use LaravelCore174\Rpms\Eloquents\Role;

class DeleteRole
{
    public function __invoke($id)
    {
        $role = Role::find($id);
        $role->delete();
    }
}
