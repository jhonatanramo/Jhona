<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {

            // 1. Crear/actualizar categorías
            $categorias = [
                'Bebidas Calientes' => 'Preparadas con café o infusiones, servidas calientes',
                /* … */
                'Producto Light'    => 'Opciones ligeras o saludables como integrales',
            ];

            foreach ($categorias as $nombre => $especificacion) {
                Categoria::firstOrCreate(
                    ['nombre' => $nombre],
                    ['especificacion' => $especificacion]
                );
            }

            // 2. Cachear categorías en memoria
            $categoriasCache = Categoria::pluck('id', 'nombre');

            // 3. Productos
            $productos = [
                ['nombre' => 'Expreso', 
                 'precio' => 6.00, 
                 'detalle' => 'Bebida caliente', 
                 'categorias' => ['Bebidas Calientes'],
                 'url' => 'https://i.postimg.cc/2yYMZWyB/1.jpg'],
                
                ['nombre' => 'Cortadito', 
                 'precio' => 7.00, 
                 'detalle' => 'Café con poca leche', 
                 'categorias' => ['Bebidas Calientes'],
                 'url' => 'https://i.postimg.cc/VvFTBN0Z/2.jpg'],
                
                ['nombre' => 'Americano', 
                 'precio' => 6.50, 
                 'detalle' => 'Café negro', 
                 'categorias' => ['Bebidas Calientes'],
                 'url' => 'https://i.postimg.cc/pVQgtscQ/3.jpg'],
                
                ['nombre' => 'Capuccino',
                 'precio' => 8.00, 
                 'detalle' => 'Café con espuma', 
                 'categorias' => ['Bebidas Calientes'],
                 'url' => 'https://i.postimg.cc/sDVbf5bk/4.jpg'],
                
                ['nombre' => 'Latte Vainilla', 
                 'precio' => 8.50, 
                 'detalle' => 'Café con leche',
                 'categorias' => ['Bebidas Calientes'],
                 'url' => 'https://i.postimg.cc/kXfz2BmB/5.jpg'],
                
                ['nombre' => 'Mocca', 
                 'precio' => 8.50,
                 'detalle' => 'Café con chocolate', 
                 'categorias' => ['Bebidas Calientes'],
                 'url' => 'https://i.postimg.cc/wjMPLgqF/6.jpg'],
                
                ['nombre' => 'Submarino', 
                 'precio' => 9.00, 
                 'detalle' => 'Leche caliente',
                 'categorias' => ['Bebidas Calientes'],
                 'url' => 'https://i.postimg.cc/TwMHzbrH/7.jpg'],
                
                ['nombre' => 'Té / Mate', 
                 'precio' => 5.00, 
                 'detalle' => 'Infusión caliente',
                 'categorias' => ['Bebidas Calientes'],
                 'url' => 'https://i.postimg.cc/YCPPxZj7/8.jpg'],
                
                ['nombre' => 'Jugos de Fruta',
                 'precio' => 7.00, 
                 'detalle' => 'Jugo natural',
                 'categorias' => ['Bebidas Frías'],
                 'url' => 'https://i.postimg.cc/HxwPdLzW/9.jpg'],
                
                ['nombre' => 'Frappé de Fruta', 
                 'precio' => 8.00, 
                 'detalle' => 'Bebida frappé',
                 'categorias' => ['Bebidas Frías'],
                 'url' => 'https://i.postimg.cc/zfRc27Rg/10.webp'],
                
                ['nombre' => 'Frapuccino', 
                 'precio' => 8.50,
                 'detalle' => 'Café frío batido', 
                 'categorias' => ['Bebidas Frías'],
                 'url' => 'https://i.postimg.cc/L6CQHwtP/11.jpg'],
                
                ['nombre' => 'Latte Vainillafrio',
                 'precio' => 8.50, 
                 'detalle' => 'Versión fría', 
                 'categorias' => ['Bebidas Frías'],
                 'url' => 'https://i.postimg.cc/BZCwzXtM/12.jpg'],
                
                ['nombre' => 'Limonada', 
                 'precio' => 6.50, 
                 'detalle' => 'Refresco de limón',
                 'categorias' => ['Bebidas Frías'],
                 'url' => 'https://i.postimg.cc/vTG2Bd2r/13.jpg'],
                
                ['nombre' => 'Té Helado', 
                 'precio' => 6.00, 
                 'detalle' => 'Té con hielo', 
                 'categorias' => ['Bebidas Frías'],
                 'url' => 'https://i.postimg.cc/KjQq3sCd/14.jpg'],
                
                ['nombre' => 'Hierbabuena / Menta', 
                 'precio' => 1.00, 
                 'detalle' => 'Complemento', 
                 'categorias' => ['Extras'],
                 'url' => 'https://i.postimg.cc/L660F21R/15.jpg'],
                
                ['nombre' => 'Crema', 
                 'precio' => 1.00, 
                 'detalle' => 'Adicional de crema', 
                 'categorias' => ['Extras'],
                 'url' => 'https://i.postimg.cc/cLv96hhb/16.jpg'],
                
                ['nombre' => 'Panini', 
                 'precio' => 10.00, 
                 'detalle' => 'Pan sándwich', 
                 'categorias' => ['Panes y Empanadas'],
                 'url' => 'https://i.postimg.cc/FHwPSSns/17.jpg'],
                
                ['nombre' => 'Pan Hamburguesa',
                 'precio' => 4.00,
                 'detalle' => '', 
                 'categorias' => ['Panes y Empanadas'],
                 'url' => 'https://i.postimg.cc/wvYgw739/18.jpg'],
                
                ['nombre' => 'Pan Francés', 
                 'precio' => 3.50, 
                 'detalle' => '', 
                 'categorias' => ['Panes y Empanadas'],
                 'url' => 'https://i.postimg.cc/BvDmBvd5/19.jpg'],
                
                ['nombre' => 'Pan Casero con Queso', 
                 'precio' => 4.50,
                 'detalle' => '',
                 'categorias' => ['Panes y Empanadas', 'Producto Light'],
                 'url' => 'https://i.postimg.cc/267TgKjV/20.jpg'],
                
                ['nombre' => 'Pan Casero con Sésamo', 
                 'precio' => 4.50,
                 'detalle' => '', 
                 'categorias' => ['Panes y Empanadas', 'Producto Light'],
                 'url' => 'https://i.postimg.cc/4dgBLggD/21.jpg'],
                
                ['nombre' => 'Pan Casero con Harina', 
                 'precio' => 4.00, 
                 'detalle' => '', 
                 'categorias' => ['Panes y Empanadas'],
                 'url' => 'https://i.postimg.cc/L5yD8g1S/22.jpg'],
                
                ['nombre' => 'Pan Casero con Anís',
                 'precio' => 4.00,
                 'detalle' => '', 
                 'categorias' => ['Panes y Empanadas'],
                 'url' => 'https://i.postimg.cc/1XRMSr4M/23.jpg'],
                
                ['nombre' => 'Pan Integral',
                 'precio' => 4.50, 
                 'detalle' => '', 
                 'categorias' => ['Panes y Empanadas', 'Producto Light'],
                 'url' => 'https://i.postimg.cc/5N0pkgh2/24.jpg'],
                
                ['nombre' => 'Empanada Integral con Queso', 
                 'precio' => 5.00, 
                 'detalle' => '', 
                 'categorias' => ['Panes y Empanadas', 'Producto Light'],
                 'url' => 'https://i.postimg.cc/pVkqZ41S/25.jpg'],
                
                ['nombre' => 'Empanada Integral con Sésamo', 
                 'precio' => 5.00, 
                 'detalle' => '', 
                 'categorias' => ['Panes y Empanadas', 'Producto Light'],
                 'url' => 'https://i.postimg.cc/Hsh3G5m4/26.jpg'],
                
                ['nombre' => 'Cuñapé', 
                 'precio' => 3.50,
                 'detalle' => 'Masa con queso', 
                 'categorias' => ['Masas Típicas'],
                 'url' => 'https://i.postimg.cc/RZJdvFVr/27.jpg'],
                
                ['nombre' => 'Empanada Pollo',
                 'precio' => 5.00, 
                 'detalle' => '', 
                 'categorias' => ['Panes y Empanadas'],
                 'url' => 'https://i.postimg.cc/1zxHXQf8/28.jpg'],
                
                ['nombre' => 'Empanada Tortilla', 
                 'precio' => 4.50, 
                 'detalle' => '', 
                 'categorias' => ['Panes y Empanadas'],
                 'url' => 'https://i.postimg.cc/zfnkRcg0/29.jpg'],
                
                ['nombre' => 'Empanada Queso Frita', 
                 'precio' => 5.50, 
                 'detalle' => '', 
                 'categorias' => ['Panes y Empanadas', 'Masas Típicas'],
                 'url' => 'https://i.postimg.cc/wvgQ5Q5H/30.jpg'],
                
                ['nombre' => 'Rollo de Carne c/ Glaseado',
                 'precio' => 12.00,
                 'detalle' => 'Especial',
                 'categorias' => ['Especiales'],
                 'url' => 'https://i.postimg.cc/tJgdwRmM/31.jpg'],
                
                ['nombre' => 'Brownie', 
                 'precio' => 6.00,
                 'detalle' => '', 
                 'categorias' => ['Especiales'],
                 'url' => 'https://i.postimg.cc/769MKJXz/32.jpg'],
                
                ['nombre' => 'Brownie con Helado',
                 'precio' => 8.00, 
                 'detalle' => '', 
                 'categorias' => ['Especiales'],
                 'url' => 'https://i.postimg.cc/Y0yNHc5q/33.jpg'],
                
                ['nombre' => 'Rollito de Queso',
                 'precio' => 4.50, 
                 'detalle' => '',
                 'categorias' => ['Masas Típicas'],
                 'url' => 'https://i.postimg.cc/bNW0Vh0m/34.jpg'],
                
                ['nombre' => 'Croissant Clásico', 
                 'precio' => 5.00, 
                 'detalle' => '', 
                 'categorias' => ['Panes y Empanadas'],
                 'url' => 'https://i.postimg.cc/NGNkTTKq/35.jpg'],
                
                ['nombre' => 'Croissant con Queso', 
                 'precio' => 5.50, 
                 'detalle' => '', 
                 'categorias' => ['Panes y Empanadas'],
                 'url' => 'https://i.postimg.cc/13FGLjJs/36.jpg'],
                
                ['nombre' => 'Sándwich de Croissant con Jamón y Queso', 
                 'precio' => 9.00, 
                 'detalle' => '', 
                 'categorias' => ['Panes y Empanadas', 'Especiales'],
                 'url' => 'https://i.postimg.cc/QxHkqt7B/37.jpg'],
                
                ['nombre' => 'Affogato', 
                 'precio' => 7.00,
                 'detalle' => 'Helado con café', 
                 'categorias' => ['Especiales', 'Bebidas Frías'],
                 'url' => 'https://i.postimg.cc/d0K2vjxd/38.jpg']
            ];
            foreach ($productos as $data) {
                // Crear o actualizar producto incluyendo la URL
                $producto = Producto::firstOrCreate(
                    ['nombre' => $data['nombre']], // Atributos de búsqueda
                    [                             // Atributos de creación
                        'precio' => $data['precio'], 
                        'detalle' => $data['detalle'],
                        'url' => $data['url']
                    ]
                );
            
                // Sincroniza categorías (parte correcta de tu código)
                $ids = collect($data['categorias'])
                        ->map(fn ($nombre) => $categoriasCache[$nombre] ?? null)
                        ->filter()
                        ->all();
            
                $producto->categorias()->syncWithoutDetaching($ids);
            }   
        });
    }
}
