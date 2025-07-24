<?php

namespace LaravelCore174\Rpms\Actions\Permission;

use Illuminate\Http\Request;
use Maklad\Permission\Models\Permission;

class IndexPermission
{
    public function __invoke(Request $request)
    {
        $perpage = $request->get('per_page', 15);
        $permissions = Permission::orderBy('created_at', 'DESC');

        return (!isset($request->isPagination) || !(int) $request->isPagination)
            ? $permissions->get()
            : $permissions->paginate($perpage);
    }
}