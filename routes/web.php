<?php

use App\Http\Controllers\GastoController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\TipgstoController;
use App\Http\Controllers\TipingresoController;
use App\Http\Controllers\CompController;
use App\Http\Controllers\EncargadoController;
use App\Http\Controllers\DetalleGastoController;
use App\Http\Controllers\DetalleIngresoController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::redirect('/admin/pages', '/prueba', 301);
Route::get('/prueba', function () {
    return view('prueba');
  });


Route::resource('ingresos', IngresoController::class);
Route::resource('encargados', EncargadoController::class);
Route::resource('gastos', GastoController::class);
Route::resource('comps',CompController::class);
Route::resource('oficinas', OficinaController::class);
Route::resource('tipgstos', TipgstoController::class);
Route::resource('tipingresos', TipingresoController::class);
Route::resource('detallegastos', DetalleGastoController::class);
Route::resource('detalleingresos', DetalleIngresoController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


