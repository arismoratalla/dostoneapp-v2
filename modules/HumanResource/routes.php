<?php

use Illuminate\Support\Facades\Route;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::prefix('hr')->group(function () {
        Route::get('/', [Modules\HumanResource\Http\Controllers\HumanResourceController::class, 'index'])->name('hr.index');

        Route::prefix('employee')->group(function () {
            Route::get('/', [Modules\HumanResource\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');
            Route::get('/{employee}/edit', [Modules\HumanResource\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
            // Route::get('/edit', [Modules\HumanResource\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
            Route::post('/store', [Modules\HumanResource\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');
        });

        Route::prefix('leave')->group(function () {
            Route::get('/', [Modules\HumanResource\Http\Controllers\LeaveController::class, 'index'])->name('leave.index');
            Route::post('/store', [Modules\HumanResource\Http\Controllers\LeaveController::class, 'store'])->name('leave.store');
        });

        Route::prefix('leavetypes')->group(function () {
            Route::get('/', [Modules\HumanResource\Http\Controllers\LeaveTypeController::class, 'index'])->name('leavetype.index');
        });

        // Route::prefix('employee')->group(function () {
        //     Route::get('/', [Modules\HumanResource\Http\Controllers\LeaveController::class, 'index'])->name('leave.index');
        //     Route::post('/store', [Modules\HumanResource\Http\Controllers\LeaveController::class, 'store'])->name('leave.store'); 
        // });

        Route::prefix('officer')->group(function () {
            // Route::get('/', [Modules\HumanResource\Http\Controllers\LeaveController::class, 'index'])->name('leave.index');
            // Route::post('/store', [Modules\HumanResource\Http\Controllers\LeaveController::class, 'store'])->name('leave.store'); 
        });

        Route::prefix('recommender')->group(function () {
            // Route::get('/', [Modules\HumanResource\Http\Controllers\LeaveController::class, 'index'])->name('leave.index');
            // Route::post('/store', [Modules\HumanResource\Http\Controllers\LeaveController::class, 'store'])->name('leave.store'); 
        });

        Route::prefix('approver')->group(function () {
            // Route::get('/', [Modules\HumanResource\Http\Controllers\LeaveController::class, 'index'])->name('leave.index');
            // Route::post('/store', [Modules\HumanResource\Http\Controllers\LeaveController::class, 'store'])->name('leave.store'); 
        });
    });
});