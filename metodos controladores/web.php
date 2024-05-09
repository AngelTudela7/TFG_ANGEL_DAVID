<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArbitroController;
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

Route::get('mostrarArbitros',[ArbitroController::class,'mostrarArbitros'])->name('mostrarArbitros');
Route::get('verArbitro/{id}',[ArbitroController::class,'verArbitro'])->name('verArbitro');
Route::get('editarArbitro/{id}', [ArbitroController::class,'editarArbitro'])->name('editarArbitro');
Route::put('actualizarArbitro/{id}',[ArbitroController::class,'actualizarArbitro'])->name('actualizarArbitro');
Route::delete('eliminarArbitro/{id}',[ArbitroController::class,'eliminarArbitro'])->name('eliminarArbitro');
