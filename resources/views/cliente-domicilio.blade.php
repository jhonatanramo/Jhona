<!-- resources/views/cliente-domicilio.blade.php -->
<div class="container-fluid">
    <div class="row">
        <!-- Productos (75%) -->
        <div class="col-lg-9">
            <h2 class="mb-4"><i class="fas fa-boxes"></i> Productos Disponibles</h2>
            <div class="row">
                @foreach($productos as $producto)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p class="text-muted small">{{ Str::limit($producto->detalle, 80) }}</p>
                            <p class="text-success h5">Bs. {{ number_format($producto->precio, 2) }}</p>
                            <form action="{{ route('carrito.agregar', $producto->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-primary">
                                    <i class="fas fa-cart-plus"></i> Añadir
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Carrito (25%) -->
        <div class="col-lg-3">
            <div class="sticky-top pt-3">
                <div class="card border-primary shadow">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="fas fa-receipt"></i> Resumen</h5>
                    </div>
                    <div class="card-body">
                        @if(session('carrito'))
                            <div class="mb-3" style="max-height: 300px; overflow-y: auto;">
                                @foreach(session('carrito') as $id => $item)
                                <div class="d-flex justify-content-between mb-2 pb-2 border-bottom">
                                    <div>
                                        <strong>{{ $item['nombre'] }}</strong>
                                        <div class="d-flex justify-content-between mt-1">
                                            <small class="text-muted">x{{ $item['cantidad'] }}</small>
                                            <small>Bs. {{ number_format($item['precio'], 2) }}</small>
                                        </div>
                                    </div>
                                    <form action="{{ route('carrito.remover', $id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </form>
                                </div>
                                @endforeach
                            </div>
                            
                            <div class="border-top pt-2">
                                <h5 class="d-flex justify-content-between">
                                    <span>Total:</span>
                                    <span class="text-primary">
                                        Bs. {{ number_format(array_reduce(session('carrito'), function($total, $item) {
                                            return $total + ($item['precio'] * $item['cantidad']);
                                        }, 0), 2) }}
                                    </span>
                                </h5>
                            </div>
                            
                            <!-- Botón de pago no funcional -->
                            <button class="btn btn-paypal w-100 mt-3" disabled>
                                <i class="fab fa-paypal"></i> Proceder al Pago
                            </button>
                            
                            <div class="alert alert-info small mt-2 mb-0 p-2">
                                <i class="fas fa-info-circle"></i> Sistema de pago en desarrollo
                            </div>
                        @else
                            <div class="text-center py-4">
                                <i class="fas fa-shopping-cart fa-3x text-muted mb-3"></i>
                                <p class="text-muted">No hay productos en el carrito</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>