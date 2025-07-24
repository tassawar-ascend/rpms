<?php

namespace LaravelCore174\Rpms\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelCore174\Rpms\Contracts\RoleDependencyActionsInterface;
use LaravelCore174\Rpms\Contracts\PermissionDependencyActionsInterface;

class BaseController extends Controller
{
    public function __construct(protected RoleDependencyActionsInterface $role, protected PermissionDependencyActionsInterface $permission) {}
}