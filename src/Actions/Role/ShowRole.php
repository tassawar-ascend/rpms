<?php

namespace LaravelCore174\Rpms\Actions\Role;

use LaravelCore174\Rpms\Eloquents\Role;

class ShowRole
{
    public function __invoke($id)
    {
        return Role::with('regions','departments')->find($id);
    }
}
