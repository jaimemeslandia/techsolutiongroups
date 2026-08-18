<?php

namespace App\Http\Middleware;

use Closure;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class JwtMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        #REVISA LA COOKIE jwt_token, SINO ESTA O ESTA MALA MANDA A LOGIN
        $token = $request->cookie('jwt_token');

        if (! $token) {
            return redirect()->route('auth.showLogin')
                ->with('error', 'Debes iniciar sesion para continuar');
        }

        try {
            $decoded = JWT::decode($token, new Key(env('JWT_SECRET'), 'HS256'));
        } catch (\Throwable $e) {
            return redirect()->route('auth.showLogin')
                ->withCookie(Cookie::forget('jwt_token'))
                ->with('error', 'Tu sesion expiro o no es valida, inicia sesion de nuevo');
        }

        $request->attributes->set('auth_user_id', $decoded->sub);

        return $next($request);
    }
}
