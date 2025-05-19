<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
          ['nombre' => 'Bebidas Calientes', 'especificacion' => 'Preparacion con café o infusiones, servidas calientes' ],
          ['nombre' => 'Bebidas Frias', 'especificacion' => 'Bebidas refrescantes con frutas, té o café'],
          ['nombre' => 'Extras', 'especificacion' => 'Adicionales para bebidas o personalizacion'],
          ['nombre' => 'Panes y Empanadas', 'especificacion' => 'Panes caseros y empanadas con diferentes ingredientes'],
          ['nombre' => 'Masas típicas', 'especificacion' => 'Productos horneados tradicionales'],
          ['nombre' => 'Especiales', 'especificacion' => 'Recetas destacadas o de temporada'],
          ['nombre' => 'Productos Light', 'especificacion' => 'Opciones ligeras o saludables como integrales']
        ];

          foreach ($categorias as $categoria)
          {

             Categoria::create($categoria);
          }
        
    }
}
