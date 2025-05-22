<?php

namespace Database\Seeders;

use App\Models\Insumo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsumosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insumos = [
            ['nombre' => 'Café molido', 'stock' => 50, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Café en grano', 'stock' => 40, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Leche entera', 'stock' => 60, 'sistema_medida_id' => 'LT'],
            ['nombre' => 'Leche deslactosada', 'stock' => 30, 'sistema_medida_id' => 'LT'],
            ['nombre' => 'Leche evaporada', 'stock' => 20, 'sistema_medida_id' => 'LT'],
            ['nombre' => 'Leche condensada', 'stock' => 25, 'sistema_medida_id' => 'LT'],
            ['nombre' => 'Leche vegetal', 'stock' => 15, 'sistema_medida_id' => 'LT'],
            ['nombre' => 'Crema de leche', 'stock' => 30, 'sistema_medida_id' => 'LT'],
            ['nombre' => 'Azúcar blanca', 'stock' => 40, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Azúcar morena', 'stock' =>30, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Edulcorante', 'stock' => 10, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Chocolate en polvo', 'stock' => 35, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Chocolate amargo', 'stock' => 20, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Cacao en polvo', 'stock' => 15, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Canela molida', 'stock' => 10, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Jarabe de vainilla', 'stock' => 15, 'sistema_medida_id' => 'LT'],
            ['nombre' => 'Jarabe de caramelo', 'stock' => 10, 'sistema_medida_id' => 'LT'],
            ['nombre' => 'Jarabe de moka', 'stock' => 10, 'sistema_medida_id' => 'LT'],
            ['nombre' => 'Hielo', 'stock' => 100, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Agua purificada', 'stock' => 200, 'sistema_medida_id' => 'LT'],
            ['nombre' => 'Limón', 'stock' => 25, 'sistema_medida_id' => 'UN'],
            ['nombre' => 'Frutilla', 'stock' => 15, 'sistema_medida_id' => 'UN'],
            ['nombre' => 'Mango', 'stock' => 20, 'sistema_medida_id' => 'UN'],
            ['nombre' => 'Piña', 'stock' => 20, 'sistema_medida_id' => 'UN'],
            ['nombre' => 'Durazno', 'stock' => 15, 'sistema_medida_id' => 'UN'],
            ['nombre' => 'Banana', 'stock' => 30, 'sistema_medida_id' => 'UN'],
            ['nombre' => 'Naranja', 'stock' => 25, 'sistema_medida_id' => 'UN'],
            ['nombre' => 'Hierba buena', 'stock' => 10, 'sistema_medida_id' => 'ML'],
            ['nombre' => 'Harina de trigo', 'stock' => 100, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Harina integral', 'stock' => 50, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Levadura', 'stock' => 10, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Huevos', 'stock' => 200, 'sistema_medida_id' => 'UN'],
            ['nombre' => 'Mantequilla', 'stock' => 50, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Margarina', 'stock' => 30, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Aceite vegetal', 'stock' => 60, 'sistema_medida_id' => 'LT'],
            ['nombre' => 'Queso rallado', 'stock' => 40, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Queso en lonjas', 'stock' => 35, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Jamón en lonjas', 'stock' => 30, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Sal', 'stock' => 25, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Anís', 'stock' => 5, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Sésamo', 'stock' => 8, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Azúcar glass', 'stock' => 15, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Chocolate para hornear', 'stock' => 20, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Brownie base', 'stock' => 40, 'sistema_medida_id' => 'UN'],
            ['nombre' => 'Helado de vainilla', 'stock' => 20, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Rollito de masa hojaldre', 'stock' => 30, 'sistema_medida_id' => 'UN'],
            ['nombre' => 'Croissant base', 'stock' => 30, 'sistema_medida_id' => 'UN'],
            ['nombre' => 'Glaseado de azúcar', 'stock' => 10, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Chispas de chocolate', 'stock' => 10, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Nueces picadas', 'stock' => 15, 'sistema_medida_id' => 'LT'],
            ['nombre' => 'Crema batida', 'stock' => 10, 'sistema_medida_id' => 'LT'],
            ['nombre' => 'Sirope de chocolate', 'stock' => 10, 'sistema_medida_id' => 'LT'],
            ['nombre' => 'Sirope de fresa', 'stock' => 20, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Té negro', 'stock' => 20, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Té verde', 'stock' => 20, 'sistema_medida_id' => 'KG'],
            ['nombre' => 'Mate cocido', 'stock' => 15, 'sistema_medida_id' => 'KG'],
          
        ];

        foreach ($insumos as $insumo)
        {
            Insumo::create($insumo);
        }
    }
}
