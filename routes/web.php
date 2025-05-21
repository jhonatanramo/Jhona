<?php
use Illuminate\Support\Facades\Route;

/* miguel*/



/* miguel*/

use App\Http\Controllers\auth\LoginController;

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ProductoController;
use Illuminate\Auth\Events\Login;


// ruta inportada por el metodo get
Route::get('/', function () {
    return view('auth.login');
});
route::get('/inicio',function(){
    return view('inicio');
});
/*-------------CLIENTE---------------*/
/*  2.1     Cliente Pedido Local    */
Route::get('/cliente/local', function () {
    return view('carrito.index');
});
/*----------Personal---------------*/
/*   iniciar la wed     */
Route::get('/personal/pedido', [ProductoController::class, 'mostrarProductos']);
Route::get('/personal',[ProductoController::class, 'obtener'])->name('obtenerBusqueda');

/*  obtener producoto buscado  */


/*-----------------Paypal----------- */
Route::get('/paypal', function () {
    return view('paypal');
});

/*----------------rutas del carrito--------*/
Route::post('/carrito', [CarritoController::class, 'carro'])->name('carrito.carro');
Route::get('/productos', [ProductoController::class, 'index'])->name('BDproductos');



/*login*/
route::get('login',[LoginController::class,'showLoginForm'])->name('login');
route::post('login',[LoginController::class,'login'])->name('logion');
route::post('login',[LoginController::class,'logout'])->name('logout');

