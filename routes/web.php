<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RecordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [UserController::class, 'dashboard']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/user', [UserController::class, 'read'] );
Route::get('/user/create', [UserController::class, 'create'] );
Route::post('/user', [UserController::class, 'store'] );
Route::delete('/user/{id}', [UserController::class, 'destroy']);

Route::get('/tabelpasien', [PatientController::class, 'read'] );
Route::get('/tabelpasien/create', [PatientController::class, 'create'] );
Route::post('/tabelpasien', [PatientController::class, 'store'] );
Route::delete('/tabelpasien/{patient_id}', [PatientController::class, 'destroy']);
Route::get('/tabelpasien/{patient_id}/edit', [PatientController::class, 'edit']);
Route::put('/tabelpasien/{patient_id}', [PatientController::class, 'update']);

Route::get('/tabelrecord', [RecordController::class, 'read'] );
Route::get('/tabelrecord/create', [RecordController::class, 'create'] );
Route::post('/tabelrecord', [RecordController::class, 'store'] );
Route::delete('/tabelrecord/{id_record}', [RecordController::class, 'destroy']);
Route::get('/tabelrecord/{id_record}/edit', [RecordController::class, 'edit']);
Route::put('/tabelrecord/{id_record}', [RecordController::class, 'update']);


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});
