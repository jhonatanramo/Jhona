<?php

namespace Database\Seeders;

use App\Models\Personal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;  //esto de aqui 

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personal = [
         [
          'ci' => 8348820,
          'nombre' => 'Pelayo Almansa Pelayo',
          'telefono' => '+34690965123',
          'correo' => 'choyos@hotmail.como',
          'password' => Hash::make('password')
         ],

         [
          'ci' => 5313689,
          'nombre' => 'Africa Parejo Carlos',
          'telefono' => '+34684014188',
          'correo' => 'quirinomuzy@gmail.com',
          'password' => Hash::make('password1')
         ]

     ];

     foreach($personal as $empleado){
        Personal::create($empleado);
     }
    }
}
