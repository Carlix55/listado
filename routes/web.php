<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;


Route::get('/', function () {
    return view('inicio');
});
Route::resource('categorias', CategoriaController::class);
Route::resource('productos', ProductoController::class);
