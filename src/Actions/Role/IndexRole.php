<?php

namespace LaravelCore174\Rpms\Actions\Role;

use Illuminate\Http\Request;
use LaravelCore174\Rpms\Eloquents\Role;

class IndexRole
{
    public function __invoke(Request $request)
    {
        $perpage = $request->get('$request->per_page', 15);
        $roles = Role::with('regions','departments')->orderBy('created_at', 'DESC'); 

        if (isset($request->search) && $request->search) {
            $roles->where(function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search . '%');
            });
        }

        if (in_array(auth('api')->user()->type, ['Admin', 'admin'])) {
            $roles->where('show', true);
        }

        return (!isset($request->isPagination) || !(int) $request->isPagination)
            ? $roles->get()
            : $roles->paginate($perpage);
    }
}