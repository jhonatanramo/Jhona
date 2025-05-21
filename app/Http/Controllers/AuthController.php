<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Muestra el formulario de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Procesa el inicio de sesión
    public function login(Request $request)
    {
        // Validamos que existan los campos
        $request->validate([
            'correo' => 'required|email',
            'password' => 'required',
        ]);
    
        // Obtenemos solo los datos necesarios
        $credentials = $request->only('correo', 'password');
    
        // Intentamos autenticar usando el guard 'web-personal'
        if (Auth::guard('web-personal')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
    
        // Si falló, regresamos con error
        return back()->withErrors([
            'correo' => 'Credenciales incorrectas.',
        ])->onlyInput('correo');
    }
    

    // Cierra la sesión
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
