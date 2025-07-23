<?php

namespace YourVendor\PackageB\Http\Controllers;

use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return Role::all();
    }

    public function create(Request $request)
    {
        $request->validate(['name' => 'required|string']);
        return Role::create(['name' => $request->name]);
    }

    public function show($id)
    {
        return Role::findOrFail($id);
    }

    public function edit(Request $request)
    {
        $role = Role::findOrFail($request->id);
        $role->update(['name' => $request->name]);
        return $role;
    }

    public function delete($id)
    {
        Role::findOrFail($id)->delete();
        return response()->json(['deleted' => true]);
    }

    public function assignPermission(Request $request)
    {
        $role = Role::findOrFail($request->role_id);
        $role->syncPermissions($request->permissions);
        return response()->json(['synced' => true]);
    }

    public function permission()
    {
        return Permission::all();
    }
}