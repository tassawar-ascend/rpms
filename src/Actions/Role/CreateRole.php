<?php

namespace LaravelCore174\Rpms\Actions\Role;

use Illuminate\Http\Request;
use illuminate\Support\Str;
use LaravelCore174\Rpms\Eloquents\Role;

class CreateRole
{
    public function __invoke(Request $request)
    {
        $role = Role::create([
            'guard_name' => 'web',
            'name' => $request->name,
            'slug' => Str::slug($request->name . '_' . substr(uniqid(), 13 - 5, 5)),
            'active' => true,
            'permission_ids' => [],
            'show' => true,
        ]);

        if (!empty($role)) {
            if (isset($request->region_ids) && !empty($request->region_ids)) {
                $role->regions()->sync($request->region_ids);
            }
            if (isset($request->department_ids)&& !empty($request->department_ids) ) {
                $role->departments()->sync($request->department_ids);
            }
        }
        
        return $role;
    }
}