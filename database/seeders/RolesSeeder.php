<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rols')->insert([
            ['codigo' => 100, 'nombre' => 'Administrador', 'manual' => 'manual_administrador.pdf'],
            ['codigo' => 101, 'nombre' => 'Cajero', 'manual' => 'manual_cajero.pdf']
        ]);
    }
}
