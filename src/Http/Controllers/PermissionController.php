<?php

namespace YourVendor\PackageB\Http\Controllers;

use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        return Permission::all();
    }

    public function create(Request $request)
    {
        $request->validate(['name' => 'required|string']);
        return Permission::create(['name' => $request->name]);
    }

    public function show($id)
    {
        return Permission::findOrFail($id);
    }

    public function edit(Request $request)
    {
        $permission = Permission::findOrFail($request->id);
        $permission->update(['name' => $request->name]);
        return $permission;
    }

    public function delete($id)
    {
        Permission::findOrFail($id)->delete();
        return response()->json(['deleted' => true]);
    }
}