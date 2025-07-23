<?php

namespace LaravelCore174\Rpms\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index() { return response()->json(['data' => 'Role Index']); }
    public function create(Request $request) { return response()->json(['data' => 'Role Created']); }
    public function show($id) { return response()->json(['data' => 'Role Show: ' . $id]); }
    public function edit(Request $request) { return response()->json(['data' => 'Role Updated']); }
    public function delete($id) { return response()->json(['data' => 'Role Deleted: ' . $id]); }
    public function assignPermission(Request $request) { return response()->json(['data' => 'Assigned Permission']); }
    public function permission() { return response()->json(['data' => 'Permissions List']); }
}