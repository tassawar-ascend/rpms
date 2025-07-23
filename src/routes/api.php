<?php

use Illuminate\Support\Facades\Route;
use LaravelCore174\Rpms\Http\Controllers\PermissionHandler;
use LaravelCore174\Rpms\Http\Controllers\RoleHandler;

Route::middleware(['hidden.route'])->prefix('x9a7f-pm')->group(function () {
    Route::prefix('pms')->group(function () {
        Route::get('y13', [PermissionHandler::class, 'index']);
        Route::post('q21', [PermissionHandler::class, 'create']);
        Route::get('s42/{id}', [PermissionHandler::class, 'show']);
        Route::post('z83', [PermissionHandler::class, 'edit']);
        Route::delete('d77/{id}', [PermissionHandler::class, 'delete']);
    });

    Route::prefix('rms')->group(function () {
        Route::get('r13', [RoleHandler::class, 'index']);
        Route::post('c24', [RoleHandler::class, 'create']);
        Route::get('v89/{id}', [RoleHandler::class, 'show']);
        Route::post('u55', [RoleHandler::class, 'edit']);
        Route::delete('x31/{id}', [RoleHandler::class, 'delete']);
        Route::post('a67', [RoleHandler::class, 'assignPermission']);
        Route::get('m28', [RoleHandler::class, 'permission']);
    });
});
