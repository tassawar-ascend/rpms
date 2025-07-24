<?php

namespace LaravelCore174\Rpms\Contracts;

use Illuminate\Http\Request;

interface PermissionDependencyActionsInterface
{
    public function index();
    public function create(Request $request);
    public function show($id);
    public function edit(Request $request);
    public function delete($id);
}