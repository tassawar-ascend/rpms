<?php

namespace LaravelCore174\Rpms\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index() {
        return response()->json(['message' => 'Permission Index']);
    }

    public function create() {}
    public function show($id) {}
    public function edit() {}
    public function delete($id) {}
}