<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RoleController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login'])->name('api.login');

Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {
        return $request->user();
    })
    ->name('api.user');

Route::name('api.')
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::apiResource('roles', RoleController::class);
        Route::apiResource('permissions', PermissionController::class);

        Route::apiResource('appointments', AppointmentController::class);

        // Appointment Departments
        Route::get('/appointments/{appointment}/departments', [
            AppointmentDepartmentsController::class,
            'index',
        ])->name('appointments.departments.index');
        Route::post('/appointments/{appointment}/departments/{department}', [
            AppointmentDepartmentsController::class,
            'store',
        ])->name('appointments.departments.store');
        Route::delete('/appointments/{appointment}/departments/{department}', [
            AppointmentDepartmentsController::class,
            'destroy',
        ])->name('appointments.departments.destroy');

        Route::apiResource(
            'appointment-diagnosis-tests',
            AppointmentDiagnosisTestController::class
        );
    });
