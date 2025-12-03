<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Root\RootController;

Route::middleware(['auth:sanctum', 'is.root'])->group(function () {
    Route::get('/admins', [RootController::class, 'listAdmins']);
    Route::post('/create-admin', [RootController::class, 'createAdmin']);
    Route::delete('/admins/{id}', [RootController::class, 'deleteAdmin']);
});
