<?php

namespace LaravelCore174\Rpms\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PermissionController extends Controller
{
    public function index() {
        return response()->json(['message' => 'List roles']);
    }

    public function store(Request $request) {
        return response()->json(['message' => 'Role created']);
    }

    public function update(Request $request, $id) {
        return response()->json(['message' => "Role {$id} updated"]);
    }

    public function destroy($id) {
        return response()->json(['message' => "Role {$id} deleted"]);
    }
}