<?php

// app/Http/Controllers/ClienteDomicilioController.php
namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ClienteDomicilioController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('cliente-domicilio', compact('productos'));
    }
    
    public function agregarAlCarrito(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $carrito = session()->get('carrito', []);
        
        if(isset($carrito[$id])) {
            $carrito[$id]['cantidad']++;
        } else {
            $carrito[$id] = [
                "nombre" => $producto->nombre,
                "precio" => $producto->precio,
                "cantidad" => 1,
                "detalle" => $producto->detalle // Añadido para mostrar en el carrito
            ];
        }
        
        session()->put('carrito', $carrito);
        return redirect()->route('cliente.domicilio')->with('success', 'Producto añadido');
    }
    
    public function removerDelCarrito($id)
    {
        $carrito = session()->get('carrito');
        if(isset($carrito[$id])) {
            unset($carrito[$id]);
            session()->put('carrito', $carrito);
        }
        return back()->with('success', 'Producto removido');
    }
}