<?php

use LaravelCore174\Rpms\Http\Controllers\PermissionController;
use LaravelCore174\Rpms\Http\Controllers\RoleController;

return [
    // Permissions routes
    'r1' => [
        'method' => 'get',
        'middleware' => ['api'],
        'action' => PermissionController::class . '@index',
        'uri' => 'permissions',
    ],
    'r2' => [
        'method' => 'post',
        'middleware' => ['api'],
        'action' => PermissionController::class . '@create',
        'uri' => 'permissions/create',
    ],
    'r3' => [
        'method' => 'get',
        'middleware' => ['api'],
        'action' => PermissionController::class . '@show',
        'uri' => 'permissions/show/{id}',
    ],
    'r4' => [
        'method' => 'post',
        'middleware' => ['api'],
        'action' => PermissionController::class . '@edit',
        'uri' => 'permissions/update',
    ],
    'r5' => [
        'method' => 'delete',
        'middleware' => ['api'],
        'action' => PermissionController::class . '@delete',
        'uri' => 'permissions/delete/{id}',
    ],

    // Role routes
    'r6' => [
        'method' => 'get',
        'middleware' => ['api'],
        'action' => RoleController::class . '@index',
        'uri' => 'role',
    ],
    'r7' => [
        'method' => 'post',
        'middleware' => ['api'],
        'action' => RoleController::class . '@create',
        'uri' => 'role/create',
    ],
    'r8' => [
        'method' => 'get',
        'middleware' => ['api'],
        'action' => RoleController::class . '@show',
        'uri' => 'role/show/{id}',
    ],
    'r9' => [
        'method' => 'post',
        'middleware' => ['api'],
        'action' => RoleController::class . '@edit',
        'uri' => 'role/update',
    ],
    'r10' => [
        'method' => 'delete',
        'middleware' => ['api'],
        'action' => RoleController::class . '@delete',
        'uri' => 'role/delete/{id}',
    ],
    'r11' => [
        'method' => 'post',
        'middleware' => ['api'],
        'action' => RoleController::class . '@assignPermission',
        'uri' => 'role/assignPermission',
    ],
    'r12' => [
        'method' => 'get',
        'middleware' => ['api'],
        'action' => RoleController::class . '@permission',
        'uri' => 'role/permission',
    ],
];