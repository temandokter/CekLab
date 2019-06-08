<?php
use App\Patient;
use App\Doctor;
use App\Http\Controllers\admin\PatientController;
use App\Http\Controllers\admin\DoctorController;
// use Illuminate\Routing\Route;

// use Symfony\Component\Routing\Route;
// use Symfony\Component\Routing\Annotation\Route;

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
Route::get('/','PatientController@index');

// <<<<<<< HEAD
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::resource('/','HomeController');
    Route::resource('employee','admin/EmployeeController');
    Route::resource('spesimen_condition','admin/Spesimen_ConditionController');
    Route::resource('date_spesimen','admin/Date_SpesimenController');
    Route::resource('officer_confirmation','admin/Officer_ConfirmationController');
// =======

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::resource('/','HomeController');
    Route::resource('patient','admin\PatientController');
    Route::resource('doctor','admin\DoctorController');
    Route::resource('clinic','admin\ClinicController');
    Route::resource('clab','admin\ChecklabController');
    Route::resource('cinfo','admin\ClinicalinfoController');
    
// >>>>>>> cd6075ba497f24bcacb39d7554c4d2be7438fe1c
});

Auth::routes();

Route::get('/{post}', 'PostController@show')->name('show');