<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  $rol
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, $rol): Response
    {
        // Verificar si el usuario está autenticado y tiene el rol requerido
        if (!$request->user() || $request->user()->rol_id != $rol) {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
