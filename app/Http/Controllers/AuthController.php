<?php

namespace App\Http\Controllers;

use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
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

        return redirect()->route('auth.showLogin')->with('success', 'Cuenta creada, ya puedes iniciar sesion');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        #VALIDA LAS CREDENCIALES Y DEVUELVE EL JWT EN UNA COOKIE
        $validado = $request->validate([
            'Correo' => 'required|string|email',
            'Clave' => 'required|string',
        ]);

        $usuario = User::where('email', $validado['Correo'])->first();

        if (! $usuario || ! Hash::check($validado['Clave'], $usuario->password)) {
            return back()->withErrors(['Correo' => 'Credenciales incorrectas'])->onlyInput('Correo');
        }

        $ahora = time();
        $ttlMinutos = (int) env('JWT_TTL', 60);

        $payload = [
            'sub' => $usuario->id,
            'iat' => $ahora,
            'exp' => $ahora + ($ttlMinutos * 60),
        ];

        $token = JWT::encode($payload, env('JWT_SECRET'), 'HS256');

        $cookie = Cookie::make(
            name: 'jwt_token',
            value: $token,
            minutes: $ttlMinutos,
            httpOnly: true,
        );

        return redirect()->route('proyectos.index')
            ->withCookie($cookie)
            ->with('success', 'Sesion iniciada correctamente');
    }

    public function logout()
    {
        return redirect()->route('auth.showLogin')
            ->withCookie(Cookie::forget('jwt_token'));
    }
}
