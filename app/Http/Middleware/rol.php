<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class rol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check()) // IMPORTANTE: No olvides verificar si el usuario está autenticado
            return redirect('login');

        $user = Auth::user();

        if ($user->tipo_usuario == $role)
            return $next($request);

        return redirect('home')->with('error', "No tienes permisos para acceder a esta página.");
    }
}
