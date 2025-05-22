@extends('layouts.cabeza')

@section('contenido')

<!-- Cargar productos y carrito desde sesión -->
@php
    $productos = DB::table('productos')->get();
    $carrito = session()->get('carrito', []);
@endphp

<link rel="stylesheet" href="{{ asset('css/P_Pesonal/Personal-pedido.css') }}">

<main class="contenido-principal">

    <!-- Formulario de búsqueda -->
    <form action="{{ route('obtenerBusqueda') }}" method="get">
        <label for="producto">Buscar producto:</label>
        <input list="productos" id="producto" name="buscar-producto">
        <datalist id="productos">
            @foreach($productos as $producto)
                <option value="{{ $producto->nombre }}"></option>
            @endforeach
        </datalist>
        <button type="submit">Buscar</button>
    </form>
<hr>@php
    $productos = DB::table('productos')->get();
    $carrito = session()->get('carrito', []);

    // Add logs
    Log::info('Productos cargados desde la base de datos');
    Log::info('Carrito cargado desde la sesión');
@endphp
    <!-- Mostrar producto(s) buscado(s) -->
    @isset($productoObtenido)
        <div class="mostrarProducoBuscado">
            @foreach($productoObtenido as $producto)
                <form action="{{ route('carrito.carro') }}" method="post">
                    @csrf
                    <h1>{{ $producto->nombre }}</h1>
                    <label for="cantidad">Cantidad</label>
                    <input type="hidden" name="id" value="{{ $producto->id }}">
                    <input type="hidden" name="nombre" value="{{ $producto->nombre }}">
                    <input type="hidden" name="precio" value="{{ $producto->precio }}">
                    <input type="number" name="cantidad" min="1" required>
                    <button name="btn" value="btn-editar">Agregar</button>
                </form>
            @endforeach
        </div>
    @endisset

    <!-- Mostrar carrito -->
    @php
        $total = 0;
        $cantidadTotal = 0;
    @endphp

    @if(count($carrito) > 0)
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carrito as $producto)
                    @php
                        $cantidadTotal += $producto['cantidad'];
                        $subtotal = $producto['cantidad'] * $producto['precio'];
                        $total += $subtotal;
                    @endphp
                    <tr>
                        <td>{{ $producto['nombre'] }}</td>
                        <td>
                            <div class="contador-cantidad">
                                <form action="{{ route('carrito.carro') }}" method="post" style="display:inline;">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $producto['id'] }}">
                                    <button class="btn-reducir" type="submit" name="btn" value="btn-reducir">-</button>
                                    <span>{{ $producto['cantidad'] }}</span>
                                    <button type="submit" name="btn" value="btn-agregar">+</button>
                                </form>
                            </div>
                        </td>
                        <td>Bs. {{ number_format($subtotal, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="detalle">
            <hr>
            <p>la suma de su pedido es de </p>
            <h1>Bs. {{ number_format($total, 2) }}</h1>
            <form action="" method="post">
                <label for="">Numero Mesa de mesa</label>
                <input type="number" required>
                <button>confirma Pedido</button>
            </form>
        </div>
    @else
        <p>No hay productos</p>
    @endif

</main>

@endsection
