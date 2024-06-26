<?php

use App\Http\Controllers\ProvedorController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EntradaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('provedors', ProvedorController::class);
Route::resource('empleados', EmpleadoController::class);
Route::resource('ventas', VentaController::class);
Route::resource('productos', ProductoController::class);
Route::resource('entradas', EntradaController::class);


Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('tickets', TicketController::class);
