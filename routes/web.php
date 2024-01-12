<?php

use App\Http\Controllers\logincontroller;
use App\Http\Controllers\management;
use Illuminate\Support\Facades\Route;



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




Route::get('/dash-board/enter-details', [App\Http\Controllers\management::class, 'senddatasymptoms'])->name('enterdetails');
Route::get('/dash-board', [management::class, 'dashboardAction']);
// Route::get('/dash-board/enter-details', [management::class, 'enterdetailspage']);
Route::get('/dash-board/get-info', [management::class, 'getinfodetailspage']);
Route::POST('/store-details', [management::class, 'store']);
Route::post('/get-patient-info', [management::class, 'getPatientInfo']);
Route::match(['get', 'post'], '/edit-patient/{id}', [management::class, 'editpatients']);
Route::post('/update-patient-info/{id}', [management::class, 'updatePatientInfo']);
Route::post('/insert-new-symptom/{id}', [management::class, 'insertnewsymptoms']);
Route::get('/login', [logincontroller::class, 'login']);
Route::get('/register', [logincontroller::class, 'registration']);
Route::post('/register-user', [logincontroller::class, 'registeruser']);
Route::post('/login-user', [logincontroller::class, 'loginuser']);
Route::get('/logout', [logincontroller::class, 'logout']);
Route::get('/profile', [logincontroller::class, 'profile']);
Route::get('/symptomdata', [management::class, 'listsymptom']); 
Route::post('/symptomdata-post', [management::class, 'sypost']);
Route::get('/patient-lisitng', [management::class, 'patientlisitng']);
