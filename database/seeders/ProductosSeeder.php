<?php
namespace Database\Seeders;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    public function run()
    {
        // 1. Primero creamos las categorías si no existen
        $categorias = [
            'Bebidas Calientes' => 'Preparadas con café o infusiones, servidas calientes',
            'Bebidas Frías' => 'Bebidas refrescantes con frutas, té o café',
            'Extras' => 'Adicionales para bebidas o personalización',
            'Panes y Empanadas' => 'Panes caseros y empanadas con diferentes ingredientes',
            'Masas Típicas' => 'Productos horneados tradicionales',
            'Especiales' => 'Recetas destacadas o de temporada',
            'Producto Light' => 'Opciones ligeras o saludables como integrales'
        ];

        foreach ($categorias as $nombre => $especificacion) {
            Categoria::firstOrCreate([
                'nombre' => $nombre
            ], [
                'especificacion' => $especificacion
            ]);
        }

        // 2. Definimos los productos con sus categorías (asignación automática)
        $productos = [
            ['nombre' => 'Expreso', 
            'precio' => 6.00, 
            'detalle' => 'Bebida caliente', 
            'categorias' => ['Bebidas Calientes']],

            ['nombre' => 'Cortadito', 
            'precio' => 7.00, 
            'detalle' => 'Café con poca leche', 
            'categorias' => ['Bebidas Calientes']],

            ['nombre' => 'Americano', 
            'precio' => 6.50, 
            'detalle' => 'Café negro', 
            'categorias' => ['Bebidas Calientes']],

            ['nombre' => 'Capuccino',
             'precio' => 8.00, 
             'detalle' => 'Café con espuma', 
             'categorias' => ['Bebidas Calientes']],

            ['nombre' => 'Latte Vainilla', 
            'precio' => 8.50, 
            'detalle' => 'Café con leche',
             'categorias' => ['Bebidas Calientes']],

            ['nombre' => 'Mocca', 
            'precio' => 8.50,
             'detalle' => 'Café con chocolate', 
             'categorias' => ['Bebidas Calientes']],

            ['nombre' => 'Submarino', 
            'precio' => 9.00, 
            'detalle' => 'Leche caliente',
             'categorias' => ['Bebidas Calientes']],

            ['nombre' => 'Té / Mate', 
            'precio' => 5.00, 
            'detalle' => 'Infusión caliente',
             'categorias' => ['Bebidas Calientes']],

            ['nombre' => 'Jugos de Fruta',
             'precio' => 7.00, 
             'detalle' => 'Jugo natural',
              'categorias' => ['Bebidas Frías']],

            ['nombre' => 'Frappé de Fruta', 
            'precio' => 8.00, 
            'detalle' => 'Bebida frappé',
             'categorias' => ['Bebidas Frías']],

            ['nombre' => 'Frapuccino', 
            'precio' => 8.50,
             'detalle' => 'Café frío batido', 
             'categorias' => ['Bebidas Frías']],

            ['nombre' => 'Latte Vainillafrio',
             'precio' => 8.50, 
             'detalle' => 'Versión fría', 
             'categorias' => ['Bebidas Frías']],

            ['nombre' => 'Limonada', 
            'precio' => 6.50, 
            'detalle' => 'Refresco de limón',
             'categorias' => ['Bebidas Frías']],

            ['nombre' => 'Té Helado', 
            'precio' => 6.00, 
            'detalle' => 'Té con hielo', 
            'categorias' => ['Bebidas Frías']],

            ['nombre' => 'Hierbabuena / Menta', 
            'precio' => 1.00, 
            'detalle' => 'Complemento', 
            'categorias' => ['Extras']],

            ['nombre' => 'Crema', 
            'precio' => 1.00, 
            'detalle' => 'Adicional de crema', 
            'categorias' => ['Extras']],

            ['nombre' => 'Panini', 
            'precio' => 10.00, 
            'detalle' => 'Pan sándwich', 
            'categorias' => ['Panes y Empanadas']],

            ['nombre' => 'Pan Hamburguesa',
             'precio' => 4.00,
              'detalle' => '', 
              'categorias' => ['Panes y Empanadas']],

            ['nombre' => 'Pan Francés', 
            'precio' => 3.50, 
            'detalle' => '', 
            'categorias' => ['Panes y Empanadas']],

            ['nombre' => 'Pan Casero con Queso', 
            'precio' => 4.50,
             'detalle' => '',
              'categorias' => ['Panes y Empanadas', 'Producto Light']],

            ['nombre' => 'Pan Casero con Sésamo', 
            'precio' => 4.50,
             'detalle' => '', 
             'categorias' => ['Panes y Empanadas', 'Producto Light']],

            ['nombre' => 'Pan Casero con Harina', 
            'precio' => 4.00, 
            'detalle' => '', 'categorias' => ['Panes y Empanadas']],

            ['nombre' => 'Pan Casero con Anís',
             'precio' => 4.00,
              'detalle' => '', 
              'categorias' => ['Panes y Empanadas']],

            ['nombre' => 'Pan Integral',
             'precio' => 4.50, 
             'detalle' => '', 
             'categorias' => ['Panes y Empanadas', 'Producto Light']],

            ['nombre' => 'Empanada Integral con Queso', 
            'precio' => 5.00, 
            'detalle' => '', 
            'categorias' => ['Panes y Empanadas', 'Producto Light']],

            ['nombre' => 'Empanada Integral con Sésamo', 
            'precio' => 5.00, 
            'detalle' => '', 
            'categorias' => ['Panes y Empanadas', 'Producto Light']],

            ['nombre' => 'Cuñapé', 
            'precio' => 3.50,
             'detalle' => 'Masa con queso', 
             'categorias' => ['Masas Típicas']],

            ['nombre' => 'Empanada Pollo',
             'precio' => 5.00, 
             'detalle' => '', 
             'categorias' => ['Panes y Empanadas']],

            ['nombre' => 'Empanada Tortilla', 
            'precio' => 4.50, 
            'detalle' => '', 
            'categorias' => ['Panes y Empanadas']],

            ['nombre' => 'Empanada Queso Frita', 
            'precio' => 5.50, 
            'detalle' => '', 
            'categorias' => ['Panes y Empanadas', 'Masas Típicas']],

            ['nombre' => 'Rollo de Carne c/ Glaseado',
             'precio' => 12.00,
              'detalle' => 'Especial',
               'categorias' => ['Especiales']],

            ['nombre' => 'Brownie', 
            'precio' => 6.00,
             'detalle' => '', 
             'categorias' => ['Especiales']],

            ['nombre' => 'Brownie con Helado',
             'precio' => 8.00, 
             'detalle' => '', 'categorias' => ['Especiales']],

            ['nombre' => 'Rollito de Queso',
             'precio' => 4.50, 
             'detalle' => '',
              'categorias' => ['Masas Típicas']],

            ['nombre' => 'Croissant Clásico', 
            'precio' => 5.00, 
            'detalle' => '', 
            'categorias' => ['Panes y Empanadas']],

            ['nombre' => 'Croissant con Queso', 
            'precio' => 5.50, 
            'detalle' => '', 
            'categorias' => ['Panes y Empanadas']],

            ['nombre' => 'Sándwich de Croissant con Jamón y Queso', 
            'precio' => 9.00, 
            'detalle' => '', 
            'categorias' => ['Panes y Empanadas', 'Especiales']],

            ['nombre' => 'Affogato', 
            'precio' => 7.00,
             'detalle' => 'Helado con café', 
             'categorias' => ['Especiales', 'Bebidas Frías']]
        ];

        // 3. Creamos los productos y asignamos categorías
        foreach ($productos as $productoData) {
            $producto = Producto::create([
                'nombre' => $productoData['nombre'],
                'precio' => $productoData['precio'],
                'detalle' => $productoData['detalle']
            ]);
        
            // Obtener los IDs de las categorías asociadas
            $idsCategorias = Categoria::whereIn('nombre', $productoData['categorias'])->pluck('id');
        
            // Asociar categorías al producto
            $producto->categorias()->attach($idsCategorias);
        }
        
    }
}