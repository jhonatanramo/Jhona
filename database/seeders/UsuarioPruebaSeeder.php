<?php
namespace Database\Seeders;  // ← ¡Este namespace es crucial!
use Illuminate\Database\Seeder;
use App\Models\User; // Ajusta al modelo que uses
use Illuminate\Support\Facades\Hash;

class UsuarioPruebaSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Usuario Demo',
            'email' => 'demo@example.com',
            'password' => Hash::make('password123'),
            // Añade otros campos necesarios
        ]);
        
        $this->command->info('¡Usuario de prueba creado exitosamente!');
    }
}