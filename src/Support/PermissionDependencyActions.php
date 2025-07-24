<?php

namespace LaravelCore174\Rpms\Support;

use Illuminate\Http\Request;
use LaravelCore174\Rpms\Contracts\PermissionDependencyActionsInterface;
use LaravelCore174\Rpms\Actions\Permission\{
    IndexPermission,
    CreatePermission,
    ShowPermission,
    EditPermission,
    DeletePermission
};

class PermissionDependencyActions implements PermissionDependencyActionsInterface
{
    public function __construct(
        protected IndexPermission $index,
        protected CreatePermission $create,
        protected ShowPermission $show,
        protected EditPermission $edit,
        protected DeletePermission $delete,
    ) {}

    public function index(Request $request) {
        return ($this->index)($request);
    }

    public function create(Request $request) {
        return ($this->create)($request);
    }

    public function show($id) {
        return ($this->show)($id);
    }

    public function edit(Request $request) {
        return ($this->edit)($request);
    }

    public function delete($id) {
        return ($this->delete)($id);
    }
}
