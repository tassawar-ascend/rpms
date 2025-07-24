<?php

namespace LaravelCore174\Rpms\Actions\Permission;

use Maklad\Permission\Models\Permission;

class ShowPermission
{
    public function __invoke($id)
    {
        return Permission::findOrFail($id);
    }
}