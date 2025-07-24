<?php

namespace LaravelCore174\Rpms\Http\Controllers;

use Illuminate\Http\Request;

class PermissionController extends BaseController
{
    public function index()
    {
        return $this->permission->index();
    }

    public function create(Request $request)
    {
        return $this->permission->create($request);
    }

    public function show($id)
    {
        return $this->permission->show($id);
    }

    public function edit(Request $request)
    {
        return $this->permission->edit($request);
    }

    public function delete($id)
    {
        return $this->permission->delete($id);
    }
}
