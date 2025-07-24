<?php

namespace LaravelCore174\Rpms\Support;

use Illuminate\Http\Request;
use LaravelCore174\Rpms\Contracts\RoleDependencyActionsInterface;
use LaravelCore174\Rpms\Actions\Role\{
    CreateRole,
    IndexRole,
    ShowRole,
    EditRole,
    DeleteRole,
    AssignPermissionToRole,
    ListRolePermissions
};

class RoleDependencyActions implements RoleDependencyActionsInterface
{
    public function __construct(
        protected CreateRole $create,
        protected IndexRole $index,
        protected ShowRole $show,
        protected EditRole $edit,
        protected DeleteRole $delete,
        protected AssignPermissionToRole $assignPermission,
        protected ListRolePermissions $listPermissions,
    ) {}

    public function index(Request $request): mixed
    {
        return ($this->index)($request);
    }

    public function create(Request $request): mixed
    {
        return ($this->create)($request);
    }

    public function show($id): mixed
    {
        return ($this->show)($id);
    }

    public function edit(Request $request): mixed
    {
        return ($this->edit)($request);
    }

    public function delete($id): mixed
    {
        return ($this->delete)($id);
    }

    public function assignPermission(Request $request): mixed
    {
        return ($this->assignPermission)($request);
    }

    public function permission(Request $request): mixed
    {
        return ($this->listPermissions)($request);
    }
}
