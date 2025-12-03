<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminBookingController;
use App\Http\Controllers\Admin\AdminValuationController;
use App\Http\Controllers\Admin\AdminCarController;

Route::middleware(['auth:sanctum', 'is.admin'])->group(function(){
    Route::get('/bookings', [AdminBookingController::class, 'pending']);
    Route::put('/bookings/{id}/approve', [AdminBookingController::class, 'approve']);
    Route::put('/booking/{id}/reject', [AdminBookingController::class, 'reject']);

    Route::get('/valuations', [AdminValuationController::class, 'pending']);
    Route::put('/valuations/{id}/approve', [AdminValuationController::class, 'approve']);
    Route::put('/valuations/{id}/reject', [AdminValuationController::class, 'reject']);

    Route::get('/cars', [AdminCarController::class, 'pending']);
    Route::put('/cars{id}/approve', [AdminCarController::class, 'approve']);
    Route::put('/cars/{id}/reject', [AdminCarController::class, 'reject']);
});