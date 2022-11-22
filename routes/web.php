<?php

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
    return view('main.main');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('usuario', 'App\http\Controllers\UsuarioController');
Route::resource('reserva', 'App\http\Controllers\ReservaController');
Route::resource('habitacion', 'App\http\Controllers\HabitacionController');
Route::resource('cliente', 'App\http\Controllers\ClienteController');
Route::resource('main', 'App\http\Controllers\MainController');
Route::resource('persona', 'App\http\Controllers\PersonaController');
Route::resource('empleado', 'App\http\Controllers\EmpleadoController');
Route::resource('plan', 'App\http\Controllers\PlanController');
Route::resource('tarifa', 'App\http\Controllers\TarifaController');
Route::resource('mainEmpleado', 'App\http\Controllers\MainEmpleadoController');
Route::post('/change/password',  [App\http\Controllers\UserSettingsController::class,'changePassword'])->name('changePassword');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('imprimirPersonas','App\http\Controllers\PdfController@imprimirPersonas')->name('imprimirPersonas');
