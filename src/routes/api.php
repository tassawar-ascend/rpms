<?php

use Illuminate\Support\Facades\Route;
use LaravelCore174\Rpms\Http\Controllers\PermissionController;
use LaravelCore174\Rpms\Http\Controllers\RoleController;

Route::middleware(['hidden.route'])->prefix('x9a7f-pm')->group(function () {
    Route::prefix('pms')->group(function () {
        Route::get('y13', [PermissionController::class, 'index']);
        Route::post('q21', [PermissionController::class, 'create']);
        Route::get('s42/{id}', [PermissionController::class, 'show']);
        Route::post('z83', [PermissionController::class, 'edit']);
        Route::delete('d77/{id}', [PermissionController::class, 'delete']);
    });

    Route::prefix('rms')->group(function () {
        Route::get('r13', [RoleController::class, 'index']);
        Route::post('c24', [RoleController::class, 'create']);
        Route::get('v89/{id}', [RoleController::class, 'show']);
        Route::post('u55', [RoleController::class, 'edit']);
        Route::delete('x31/{id}', [RoleController::class, 'delete']);
        Route::post('a67', [RoleController::class, 'assignPermission']);
        Route::get('m28', [RoleController::class, 'permission']);
    });
});
