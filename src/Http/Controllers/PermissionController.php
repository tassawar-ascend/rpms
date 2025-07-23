<?php

namespace YourVendor\PackageB\Http\Controllers;

use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class PermissionHandler extends Controller
{
    public function index() { return response()->json(['data' => 'Permission Index']); }
    public function create(Request $request) { return response()->json(['data' => 'Permission Created']); }
    public function show($id) { return response()->json(['data' => 'Permission Show: ' . $id]); }
    public function edit(Request $request) { return response()->json(['data' => 'Permission Updated']); }
    public function delete($id) { return response()->json(['data' => 'Permission Deleted: ' . $id]); }
}