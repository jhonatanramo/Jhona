<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=Producto::all();
        return view('carrito.index', compact('productos'));
    }

        public function obtener(Request $request)
    {
        $nombreBuscado = $request->input('buscar-producto');

        $productoObtenido = DB::table('productos')
            ->where('nombre', 'like', '%' . $nombreBuscado . '%')
            ->get();
        return view('P_personal.Personal-pedido', compact('productoObtenido'));
    }


        public function mostrarProductos()
        {
            $productos = DB::table('productos')->get();
            return view('P_personal.Personal-pedido', compact('productos'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
