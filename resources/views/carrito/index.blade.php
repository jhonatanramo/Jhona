@extends('layouts.cabeza')
    <main class="contenido-principal">
        @section('content')
<main class="contenido-principal">
    <h1>Lista de Productos</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</main>


        

        <form action="" method="post">
            @csrf
            <label for="">id</label><input name="id" type="text">
            <label for="">nombre</label><input name="nombre" type="text">
            <label for="">precio</label><input name="precio" type="text">
            <button 
                type="submit" 
                name="btn" 
                value="btn-agregar"
                >Agregar
            </button>
        </form>
        @php
        $carrito = session()->get('carrito', []);
        @endphp
@if (session('exito'))
    <div class="alert alert-success">
        {{ session('exito') }}
    </div>
@endif

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>
        @foreach ($carrito as $producto)
            <tr>
                <td>{{ $producto['id'] }}</td>
                <td>{{ $producto['nombre'] }}</td>
                <td>{{ $producto['precio'] }}</td>
                <td>{{ $producto['cantidad'] }}</td>
            </tr>
        @endforeach
    </table>
    
    </main>
@extends('layouts.Pie')