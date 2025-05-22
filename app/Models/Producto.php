<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany; // ✅ Importación necesaria

class Producto extends Model
{
    protected $fillable = ['nombre', 'precio', 'detalle','url'];

    public function categorias(): BelongsToMany
    {
        return $this->belongsToMany(Categoria::class, 'categoria_productos', 'idProducto', 'idCategoria');
    }

    public function promociones(): BelongsToMany
    {
        return $this->belongsToMany(Promocion::class, 'producto_promocions', 'IdProducto', 'IdPromocion')
                    ->withPivot('descuento', 'parametro');
    }

    public function insumos(): BelongsToMany
    {
        return $this->belongsToMany(Insumo::class, 'producto_insumos', 'idProducto', 'idInsumo')
                    ->withPivot('cantidadRequerida', 'idSistemaMedida');
    }

    public function pedidos(): BelongsToMany
    {
        return $this->belongsToMany(Pedido::class, 'detalle_pedido_productos', 'idProducto', 'nroPedido')
                    ->withPivot('cantidad');
    }
}
