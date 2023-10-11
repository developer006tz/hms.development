<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PhamacyController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\InPatientController;
use App\Http\Controllers\StaffTypeController;
use App\Http\Controllers\BloodGroupController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HospitalTypeController;
use App\Http\Controllers\HospitalAdminController;
use App\Http\Controllers\AppointmentFeedbackController;
use App\Http\Controllers\DiagnosisLaboratoryController;
use App\Http\Controllers\PreliminaryMeasurementController;
use App\Http\Controllers\AppointmentDiagnosisTestController;
use App\Http\Controllers\AppointmentDoctorInvoiceController;
use App\Http\Controllers\PatientAppointmentDiagnosisController;
use App\Http\Controllers\HospitalIdentificationNumbersController;
use App\Http\Controllers\AppointmentDiagnosisTestResultController;
use App\Http\Controllers\Receptionist\DashboardController as ReceptionistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/')
    ->middleware('auth')
    ->group(function () {
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
        Route::resource('appointments', AppointmentController::class);
        Route::resource('staff-types', StaffTypeController::class);
        Route::resource('super-admins', SuperAdminController::class);
        Route::resource('hospitals', HospitalController::class);
        Route::resource('patients', PatientController::class);
        Route::resource('users', UserController::class);


        Route::get('/',[ReceptionistController::class,'index'])->name('dashboard');
        Route::get('/add-patient',[ReceptionistController::class,'add_patient'])->name('patient.add');
        Route::get('/list-patient',[ReceptionistController::class,'list_patient'])->name('patient.list');
        Route::get('/add-appointment',[ReceptionistController::class,'add_appointment'])->name('appointment.add');
        Route::get('/list-appointment',[ReceptionistController::class,'list_appointment'])->name('appointment.list');
        Route::get('/list-doctors-by-schedule',[ReceptionistController::class,'list_doctors_by_schedule'])->name('doctor.ondute');
        Route::get('/list-doctors',[ReceptionistController::class,'list_doctors'])->name('doctor.list');
        Route::get('/list-departments',[ReceptionistController::class,'department_list'])->name('department.list');
    });
