<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArbitroController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\EstadioController;
use App\Models\Arbitro;

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


Route::get('principal', function () {
    return view('principal');
});

Route::view('principal', 'principal')->name('principal');





//Arbitros
Route::get('mostrarArbitros',[ArbitroController::class,'mostrarArbitros'])->name('mostrarArbitros');
Route::get('verArbitro/{id}',[ArbitroController::class,'verArbitro'])->name('verArbitro');
Route::get('editarArbitro/{id}', [ArbitroController::class,'editarArbitro'])->name('editarArbitro');
Route::put('actualizarArbitro/{id}',[ArbitroController::class,'actualizarArbitro'])->name('actualizarArbitro');
Route::delete('eliminarArbitro/{id}',[ArbitroController::class,'eliminarArbitro'])->name('eliminarArbitro');
Route::view('nuevoArbitro', 'nuevoArbitro')->name('nuevoArbitro');
Route::post('crearArbitro',[ArbitroController::class,'crearArbitro'])->name('crearArbitro');



//Estadios
Route::get('mostrarEstadios',[EstadioController::class,'mostrarEstadios'])->name('mostrarEstadios');
Route::get('verEstadio/{id}',[EstadioController::class,'verEstadio'])->name('verEstadio');
Route::get('editarEstadio/{id}', [EstadioController::class,'editarEstadio'])->name('editarEstadio');
Route::put('actualizarEstadio/{id}',[EstadioController::class,'actualizarEstadio'])->name('actualizarEstadio');
Route::delete('eliminarEstadio/{id}',[EstadioController::class,'eliminarEstadio'])->name('eliminarEstadio');
Route::view('nuevoEstadio', 'nuevoEstadio')->name('nuevoEstadio');
Route::post('crearEstadio',[EstadioController::class,'crearEstadio'])->name('crearEstadio');

//Equipos
Route::get('mostrarEquipos',[EquipoController::class,'mostrarEquipos'])->name('mostrarEquipos');
Route::get('verEquipo/{id}',[EquipoController::class,'verEquipo'])->name('verEquipo');
Route::get('editarEquipo/{id}', [EquipoController::class,'editarEquipo'])->name('editarEquipo');
Route::put('actualizarEquipo/{id}',[EquipoController::class,'actualizarEquipo'])->name('actualizarEquipo');
Route::delete('eliminarEquipo/{id}',[EquipoController::class,'eliminarEquipo'])->name('eliminarEquipo');
Route::view('nuevoEquipo', 'nuevoEquipo')->name('nuevoEquipo');
Route::post('crearEquipo',[EquipoController::class,'crearEquipo'])->name('crearEquipo');