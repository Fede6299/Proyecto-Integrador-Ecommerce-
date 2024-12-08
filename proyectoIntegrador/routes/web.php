<?php

use App\Http\Controllers\BuscadorController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;


// metodos get
Route::get('/',[PaginaController::class, 'index']);
Route::get('/productos/{categoria_id}',[PaginaController::class,'catProductos']);
Route::get('/sobre-nosotros', [PaginaController::class,'sobreNosotros']);
Route::get('/contacto',[PaginaController::class, 'contacto']);
Route::get('/administracion/login', [PaginaController::class, 'loginAdm']);
Route::get('/productos/producto/{nombreLink}',[ProductoController::class,'index'] );
Route::get('/buscar/productos/{queryLink}', [BuscadorController::class,'buscarApi']);