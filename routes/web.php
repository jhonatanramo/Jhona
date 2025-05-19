<?php
use Illuminate\Support\Facades\Route;
// ruta inportada por el metodo get
Route::get('/', function () {
    return view('welcome');
});
route::get('/inicio',function(){
    return view('inicio');
});
Route::get('/index', function () {
    return view('carrito.index');
});
/*----------------rutas del carrito--------*/
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ProductoController;

Route::get('/carrito', [CarritoController::class, 'mostrar'])->name('carrito.mostrar');
route::post('/carrito',[CarritoController::class,'carro'])->name('carrito.carro');
Route::get('/carrito', [ProductoController::class, 'index'])->name('carrito.index');

