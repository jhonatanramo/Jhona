@extends('layouts.cabeza')
@section('contenido')
<link rel="stylesheet" href="{{ asset('css/P_Cliente/cliente-local.css') }}">

<!--esta seccion no se toca-->
@php
\DB::connection()->getPdo();
$productos = \DB::table('productos')->get();
$carrito = session()->get('carrito', []);
$imagen= \DB::table('imagens')->get();
$cantidad=0;
@endphp
<!--fin-->
        <!---no cambiar el nombre de la clase 'contenido-principal' -->
        <!---no cambiar el nombre de la clase 'carrito-flotante' -->
        <!---no cambiar el nombre de la id 'btn-cerrar-carrito' -->
        <!---no tocar los id -->
        <!---no tocar los name -->
        <!---no tocar los values -->

<main class="contenido-principal">

<!--seccion del detalle de pedido-->
   

    @if (count($carrito))

<!--contenido de carrityor o detalle de compra-->
        <aside class="carrito-flotante">

                <div>
                    <h2>Carrito</h2>
                    <button id="btn-cerrar-carrito">×</button>
                </div>
                
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php $total = 0; @endphp
                            @foreach($carrito as $producto)
                            @php $cantidad+= $producto['cantidad']; @endphp
                            <tr>
                                <!--nombre producot-->
                                <td>{{ $producto['nombre'] }}</td>
                                <!--acciones como agregar y reducir-->
                                <td>
                                    <div class="contador-cantidad">
                                        <form action="{{ route('carrito.carro') }}" method="post">
                                            @csrf 
                                            <input type="hidden" name="id" value="{{$producto['id']}}">
                                            <button class="btn-reducir" type="submit" name="btn" value="btn-reducir">-</button>

                                            <span>{{$producto['cantidad']}}</span>
        
                                            <button type="submit" name="btn" value="btn-agregar">+</button>
                                        </form>
                                    </div>
                                </td>
                                <!--valor sub total-->
                                <td>Bs. {{$producto['cantidad']*$producto['precio']}}</td>

                                <!---no se toca-->
                                @php $total += $producto['cantidad']*$producto['precio']; @endphp
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--detalle resumido del pediod-->
                    <div>
                        <hr>
                        <p>Total a pagar:</p>
                        <!--Precio Total--->
                        <h1>Bs. {{$total}}</h1>
                        <hr>
                        <form action="" method="post" class="datos">
                            <h4>para proceder con el pago introdusca su numero de mesa</h4>
                            <br><input type="text" required><br>
                            <div id="paypal-button-container"></div>
                            <button>Confirmar compra</button>
                        </form>
                    </div>
                </div>
        </aside>
        <button id="btn-abrir-carrito"><ion-icon name="cart-outline"></ion-icon><span>{{$cantidad}}</span></button>
    @else
        <p>No hay productos en el carrito.</p>
    @endif
<!--FIN de contenido de carrior o detalle de compra-->

<!--menu donde estan los producto-->
    <h1>Entrega Local</h1>


    <div class="menu">
        @foreach($productos as $producto)<!--ciclo de repeticion -->
            <div><!--CONTENEDOR O TARJETA-->
                <!--imgen de la tarjeta-->
                <img src="{{$producto->url}}" alt="">
                <!-- datos de la tarjeta-->
                <h3>{{$producto->nombre}}</h3><!--nombre del producto-->
                <h3>{{$producto->precio}}</h3><!--precio Del Producto-->
                <!--solo  Tocar el boton--> 
                <form action="{{ route('carrito.carro') }}" method="post">
                    @csrf
                    <input type="hidden" name="id"     type="text" value="{{$producto->id}}">
                    <input type="hidden" name="nombre" type="text" value="{{$producto->nombre}}">
                    <input type="hidden" name="precio" type="text" value="{{$producto->precio}}">
                    <button type="submit" name="btn" value="btn-agregar">Agregar</button>
                </form>
                <!-- fin del formulario-->
            </div>
        @endforeach
    </div>

    
</main>

<!--esta parte no se toca-->
<script>
    const carritoFlotante = document.querySelector('.carrito-flotante');
    const btnAbrirCarrito = document.getElementById('btn-abrir-carrito');
    const btnCerrarCarrito = document.getElementById('btn-cerrar-carrito');
    let carritoVisible = false;
    function toggleCarrito() {
        carritoVisible = !carritoVisible;
        carritoFlotante.style.display = carritoVisible ? 'block' : 'none';
    }
    btnAbrirCarrito.addEventListener('click', toggleCarrito);
    btnCerrarCarrito.addEventListener('click', toggleCarrito);
    carritoFlotante.addEventListener('click', function(e) {
        if (e.target === carritoFlotante) {
            toggleCarrito();
        }
    });
</script>
@endsection
