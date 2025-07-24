<?php

namespace LaravelCore174\Rpms\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends BaseController
{
    public function index(Request $request)
    {
        return $this->role->index($request);
    }

    public function create(Request $request)
    {
        try {
            $permission = $this->role->create($request);
            return $this->dataResponse($permission, 'Permission is created successfully', 200);
        } catch (\Throwable $th) {
            return $this->dataResponse([], $th->getMessage(), 400);
        }
    }

    public function show($id)
    {
        $role = $this->role->show($id);
        return $this->dataResponse($role, 'Role is retrived successfully', 200);
    }

    public function edit(Request $request)
    {
        $role = $this->role->edit($request);
        return $this->dataResponse($role, 'Permission is updated successfully', 200);
    }

    public function delete($id)
    {
        $role = $this->role->show($id);
        if ($role && strtolower($role->name) !== 'admin') {
            $this->role->delete($id);
            $message = 'Role is deleted successfully';
        } elseif ($role && strtolower($role->name) === 'admin') {
            $message = 'No permission to delete Admin Role';
        } else {
            $message = 'Role not found';
            $permission = [];
        }
        return $this->dataResponse($permission, $message, 200);
    }

    public function assignPermission(Request $request)
    {
        $role = $this->role->assignPermission($request);
        if (!empty($role)) {
            return $this->dataResponse($role, 'Role permissions are updated successfully', 200);
        } else {
            return $this->codeResponse(200, 'Role not found');
        }
    }

    public function permission(Request $request)
    {
        $role = $this->role->permission($request);
        return $this->dataResponse($role, 'Role data', 200);
    }
}