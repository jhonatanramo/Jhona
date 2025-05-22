<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ProductoController;


//miguel
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteDomicilioController;



// ruta inportada por el metodo get
Route::get('/', function () {
    return view('auth.login');
});
/*-------------CLIENTE---------------*/
/*  2.1     Cliente Pedido Local    */
Route::get('/cliente/local', function () {return view('Pcliente.Local');})->name('cliente_local');

Route::get('/cliente/adimicilio', function () {return view('Pcliente.Adomicilio');})->name('cliente_Adomicilio');
/*----------Personal---------------*/

/*   iniciar la wed     */
Route::get('/personal/pedido', [ProductoController::class, 'mostrarProductos'])->name('personal_pedido');
Route::get('/personal',[ProductoController::class, 'obtener'])->name('obtenerBusqueda');

route ::get('/personal/seguimiento',function(){
    return view('P_personal.Personal-Seguimiento');
})->name('Personal-seguimiento');


/*----------------rutas del carrito--------*/
Route::post('/carrito', [CarritoController::class, 'carro'])->name('carrito.carro');
Route::get('/productos', [ProductoController::class, 'index'])->name('BDproductos');









/* miguel */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Cambia 'auth:web' por 'auth:web-personal' para que coincida con tu guard
Route::middleware('auth:web-personal')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard'); // Añade nombre a la ruta
});

Route::prefix('domicilio')->group(function() {
    Route::get('/', [ClienteDomicilioController::class, 'index'])->name('cliente.domicilio');
    Route::post('/carrito/agregar/{id}', [ClienteDomicilioController::class, 'agregarAlCarrito'])->name('carrito.agregar');
    Route::post('/carrito/remover/{id}', [ClienteDomicilioController::class, 'removerDelCarrito'])->name('carrito.remover');
});