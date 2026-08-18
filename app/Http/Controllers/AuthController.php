<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.registro');
    }

    public function register(Request $request)
    {
        #REGISTRA EL USUARIO CON LA CLAVE CIFRADA
        $validado = $request->validate([
            'Nombre' => 'required|string|max:255',
            'Correo' => 'required|string|email|max:255|unique:users,email',
            'Clave' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $validado['Nombre'],
            'email' => $validado['Correo'],
            'password' => Hash::make($validado['Clave']),
        ]);

        return redirect('/login')->with('success', 'Cuenta creada, ya puedes iniciar sesion');
    }
}
