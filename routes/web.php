<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;

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

Route::get('cliente/registrar',[clienteController::class, 'create'])->name('cliente.create');
Route::post('cliente/guardar',[clienteController::class, 'store'])->name('cliente.store');
Route::get('cliente/listar',[clienteController::class, 'index'])->name('cliente.index');
