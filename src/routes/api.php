<?php

use Illuminate\Support\Facades\Route;
use LaravelCore174\Rpms\Http\Controllers\PermissionController;
use LaravelCore174\Rpms\Http\Controllers\RoleController;

Route::prefix('api/permissions')->group(function () {
    Route::get('/', [PermissionController::class, 'index']);
    Route::post('create', [PermissionController::class, 'create']);
    Route::get('show/{id}', [PermissionController::class, 'show']);
    Route::post('update', [PermissionController::class, 'edit']);
    Route::delete('delete/{id}', [PermissionController::class, 'delete']);
});

Route::prefix('api/role')->group(function () {
    Route::get('/', [RoleController::class, 'index']);
    Route::post('create', [RoleController::class, 'create']);
    Route::get('show/{id}', [RoleController::class, 'show']);
    Route::post('update', [RoleController::class, 'edit']);
    Route::delete('delete/{id}', [RoleController::class, 'delete']);
    Route::post('assignPermission', [RoleController::class, 'assignPermission']);
    Route::get('permission', [RoleController::class, 'permission']);
});