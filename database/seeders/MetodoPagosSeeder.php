<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodoPagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('metodo_pagos')->insert([
            ['id' => 'EF', 'nombre' => 'Efectivo'],
            ['id' => 'TC', 'nombre' => 'Tarjeta Crédito'],
            ['id' => 'TD', 'nombre' => 'Tarjeta Débito'],
            ['id' => 'QR', 'nombre' => 'Pago QR'],
            ['id' => 'YP', 'nombre' => 'Yape']
        ]);
    }
}
