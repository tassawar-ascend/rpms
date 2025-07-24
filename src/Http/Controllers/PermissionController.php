<?php

namespace LaravelCore174\Rpms\Http\Controllers;

use Illuminate\Http\Request;

class PermissionController extends BaseController
{
    public function index(Request $request)
    {
        return $this->permission->index($request);
    }

    public function create(Request $request)
    {
        $permission = $this->permission->create($request);
        return $this->dataResponse($permission, 'Permission is created successfully', 200);
    }

    public function show($id)
    {
        $permission = $this->permission->show($id);
        return $this->dataResponse($permission, 'Permission is retrived successfully', 200);
    }

    public function edit(Request $request)
    {
        $permission = $this->permission->edit($request);
        return $this->dataResponse($permission, 'Permission is updated successfully', 200);
    }

    public function delete($id)
    {
        $permission = $this->permission->delete($id);
        if (!empty($permission)) {
            return $this->dataResponse($permission, 'Permission is deleted successfully', 200);
        } else {
            return $this->codeResponse(404, 'Permission not found');
        }
    
    }
}
