<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SistemaMedidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sistema_medidas')->insert([
         ['id' => 'UN', 'nombre' => 'Unidades'],
         ['id' => 'KG', 'nombre' => 'Kilogramos'],
         ['id' => 'LT', 'nombre' => 'Litros'],
         ['id' => 'ML', 'nombre' => 'Mililitros'],
         ['id' => 'GR', 'nombre' => 'Gramos'],
         ['id' => 'LB', 'nombre' => 'Libras'] 

        ]);
    }
}
