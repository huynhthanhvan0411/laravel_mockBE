<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeControler;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;

// Route::get('/employees', [EmployeeControler::class, 'index']);
// Route::
Route::group(['middleware' => 'api', 'prefix' => 'employees'], function () {
    Route::get('', [EmployeeControler::class, 'index']);
    Route::get('{id}', [EmployeeControler::class, 'show']);
    Route::post('add', [EmployeeControler::class, 'create']);
    Route::put('update', [EmployeeControler::class, 'update']);
    Route::delete('delete/{id}', [EmployeeControler::class, 'destroy']);
});

// 
Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('me', [AuthController::class, 'me']);

    Route::post('logout', [AuthController::class, 'logout']);
    // Route::post('refresh', [AuthController::class, 'refresh']);

    Route::post('register', [AuthController::class, 'register']);
    // Route::post('reset-password', [AuthController::class, 'resetPassword']);
    // Route::post('forgot-password', [AuthController::class, 'createResetPasswordToken']);
});
//attendance 
 Route::group(['middleware' => 'api', 'prefix' => 'attendance'], function () {
    Route::get('', [AttendanceController::class, 'index']);
    Route::get('{id}', [AttendanceController::class, 'checkAttendance']);
    Route::post('add', [AttendanceController::class, 'create']);
    Route::put('update', [AttendanceController::class, 'update']);
    Route::delete('delete/{id}', [AttendanceController::class, 'destroy']);
});