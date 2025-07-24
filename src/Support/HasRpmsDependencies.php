<?php

namespace LaravelCore174\Rpms\Support;

use LaravelCore174\Rpms\Contracts\PermissionDependencyActionsInterface;
use LaravelCore174\Rpms\Contracts\RoleDependencyActionsInterface;

trait HasRpmsDependencies {
    protected RoleDependencyActionsInterface $role;
    protected PermissionDependencyActionsInterface $permission;

    public function __construct(
        RoleDependencyActionsInterface $role,
        PermissionDependencyActionsInterface $permission
    ) {
        $this->role = $role;
        $this->permission = $permission;
    }
}