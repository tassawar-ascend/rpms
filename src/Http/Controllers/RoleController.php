<?php

namespace LaravelCore174\Rpms\Http\Controllers;

use Illuminate\Routing\Controller;

class RoleController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Roles list']);
    }

    public function store()
    {
        return response()->json(['message' => 'Role created']);
    }
}