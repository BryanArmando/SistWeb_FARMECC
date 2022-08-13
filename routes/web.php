<?php

use App\Http\Livewire\Gestsucursal;
use App\Models\Sucursal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//AUTENTICACIÓN SIN REGISTRO
Auth::routes(['register' => false]);

//PRINCIPALES   
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'] )->name('login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'] )->name('home');
Route::get('/mainpage', [App\Http\Controllers\HomePageIni::class, 'index'] )->name('homeini');
Route::get('/password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'index'] )->name('password.request');

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/', [App\Http\Controllers\InformationController::class, 'index'])->name('inicio');

//PANEL SUPERIOR PRINCIPAL
Route::get('/listcatalogo', [App\Http\Controllers\ProductController::class, 'index'])->name('catalogo.listcatalogo');
Route::post('/listcatalogo', [App\Http\Controllers\ProductController::class, 'addcarrito'])->name('catalogo.store');
Route::get('/contactos',[App\Http\Controllers\DoctorController::class, 'medicos'])->name('contactos');

//MÓDULOS
Route::get('/productos', [App\Http\Controllers\ProductController::class, 'index4'])->name('productos');
Route::get('/stock', [App\Http\Controllers\ProductController::class, 'index5'])->name('stock');
Route::get('/ventas',[App\Http\Controllers\VentaController::class, 'index'])->name('ventas');
Route::get('/personal',[App\Http\Controllers\PersonalController::class, 'index'])->name('personal');
Route::get('/repsucursales',[App\Http\Controllers\ReporteController::class, 'index'])->name('repsucursales');
Route::get('/gestsucursales',[App\Http\Controllers\SucursalController::class, 'index'])->name('gestsucursales');
Route::get('/pedidos',[App\Http\Controllers\PedidosController::class, 'index'])->name('pedidos');





