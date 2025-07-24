<?php

namespace LaravelCore174\Rpms\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelCore174\Rpms\Contracts\RoleDependencyActionsInterface;

class BaseController extends Controller
{
    public function __construct(protected RoleDependencyActionsInterface $role) {
        parent::__construct();
    }
}
