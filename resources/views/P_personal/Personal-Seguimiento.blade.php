@extends('layouts.cabeza')

@php
    use Illuminate\Support\Facades\DB;
    $pedidos = DB::table('pedidos')->get();
@endphp
<style>
    .contenido-principal {
        max-width: 1000px;
        margin: 40px auto;
        font-family: Arial, sans-serif;
        background-color: #fdfdfd;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
    }

    th, td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ccc;
    }

    th {
        background-color: #f4f4f4;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    button {
        background-color: #3498db;
        color: white;
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.2s ease;
    }

    button:hover {
        background-color: #2980b9;
    }

    .mensaje {
        text-align: center;
        padding: 15px;
        background-color: #fff3cd;
        color: #856404;
        border: 1px solid #ffeeba;
        border-radius: 6px;
    }
</style>

<link rel="stylesheet" href="{{asset('')}}">
@section('contenido')
<main class="contenido-principal">
    <h1>Lista de Pedidos</h1>

    @if ($pedidos->isEmpty())
        <p>No hay pedidos registrados.</p>
    @else
        <table border="1">
            <thead>
                <tr>
                    <th>Nro</th>
                    <th>Monto</th>
                    <th>Tipo</th>
                    <th>CI Personal</th>
                    <th>Estado Preparación</th>
                    <th>Estado Pago</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->nro }}</td>
                        <td>{{ $pedido->monto }}</td>
                        <td>{{ $pedido->tipo }}</td>
                        <td>{{ $pedido->ciPersonal }}</td>
                        <td>{{ $pedido->estadoPreparacion }}</td>
                        <td>{{ $pedido->estadoPago }}</td>
                        <td><button>Detalle</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</main>
@endsection
