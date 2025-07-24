<?php

namespace LaravelCore174\Rpms\Contracts;

use Illuminate\Http\Request;

interface RoleDependencyActionsInterface
{
    public function index(Request $request): mixed;
    public function create(Request $request): mixed;
    public function show($id): mixed;
    public function edit(Request $request): mixed;
    public function delete($id): mixed;
    public function assignPermission(Request $request): mixed;
    public function permission(Request $request): mixed;
}