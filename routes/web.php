<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

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

Route::view('/','welcome')->name('inicio');

Route::resource('/categorias',CategoriaController::class);  //Crea 7 rutas para el CRUD de categorias
Route::resource('/productos',ProductoController::class); //Crea 7 rutas para el CRUD de productos