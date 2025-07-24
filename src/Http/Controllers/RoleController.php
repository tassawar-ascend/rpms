<?php

namespace LaravelCore174\Rpms\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends BaseController
{
    public function index()
    {
        return $this->role->index();
    }

    public function create(Request $request)
    {
        return $this->role->create($request);
    }

    public function show($id)
    {
        return $this->role->show($id);
    }

    public function edit(Request $request)
    {
        return $this->role->edit($request);
    }

    public function delete($id)
    {
        return $this->role->delete($id);
    }

    public function assignPermission(Request $request)
    {
        return $this->role->assignPermission($request);
    }

    public function permission()
    {
        return $this->role->permission();
    }
}