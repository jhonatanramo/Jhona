<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Personal;

class LoginController extends Controller
{
    // Mostrar formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Procesar inicio de sesión
    public function login(Request $request)
    {
        // Validar los campos
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Buscar al usuario por su correo
        $user = Personal::where('correo', $request->email)->first();

        // Verificar si existe y la contraseña es correcta
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::guard('personal')->login($user);
            return redirect()->intended('/cliente-local');
        }

        // En caso de error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ])->withInput();
    }

    // Cerrar sesión
    public function logout(Request $request)
    {
        Auth::guard('personal')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
