<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidosController;

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
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/* Rutas pedido  cliente*/ 
Route::get('domicilio/crearpedido',[App\Http\Controllers\PedidosController::class,'verificar'])->name('domicilio.crearpedido');
Route::post('domicilio/create',[App\Http\Controllers\PedidosController::class,'create'])->name('domicilio.create');

Route::post('domicilio/guardar',[App\Http\Controllers\PedidosController::class,'store'])->name('domicilio.store');

/* Rutas pedido  admin */

Route::get('administrador/pedido',[App\Http\Controllers\PedidosController::class,'prueba'])->name('administrador.pedido');



