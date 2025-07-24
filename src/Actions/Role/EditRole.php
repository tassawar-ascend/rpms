<?php

namespace LaravelCore174\Rpms\Actions\Role;

use Illuminate\Http\Request;
use LaravelCore174\Rpms\Eloquents\Role;

class EditRole
{
    public function __invoke(Request $request)
    {
        $role = Role::find($request->_id);

        if (!empty($role)) {
            $role->update(['name' => $request->name]);
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