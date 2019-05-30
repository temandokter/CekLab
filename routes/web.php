<?php
use App\Patient;
use App\Http\Controllers\Admin\PatientController;
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
// Route::get('/','PatientController@index');


Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::resource('/','HomeController');
    Route::resource('patient','admin\PatientController');
    
});

Auth::routes();

// Route::get('/{post}', 'PostController@show')->name('show');