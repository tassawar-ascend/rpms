<?php

return [
    'permissions' => [
        'prefix' => 'r13',
        'controller' => \LaravelCore174\Rpms\Http\Controllers\PermissionController::class,
        'routes' => [
            'GET /api/permissions' => 'index',
            'POST /api/permissions/create' => 'create',
            'GET /api/permissions/show/{id}' => 'show',
            'POST /api/permissions/update' => 'edit',
            'DELETE /api/permissions/delete/{id}' => 'delete',
        ],
    ],
    'roles' => [
        'prefix' => 'r14',
        'controller' => \LaravelCore174\Rpms\Http\Controllers\RoleController::class,
        'routes' => [
            'GET /api/role' => 'index',
            'POST /api/role/create' => 'create',
            'GET /api/role/show/{id}' => 'show',
            'POST /api/role/update' => 'edit',
            'DELETE /api/role/delete/{id}' => 'delete',
            'POST /api/role/assignPermission' => 'assignPermission',
            'GET /api/role/permission' => 'permission',
        ],
    ],
];