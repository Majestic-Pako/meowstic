<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User; 

class VerificarRol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
            dd('Middleware rol ejecutado');
            \Log::info('Middleware rol ejecutado para usuario: ' . (auth()->check() ? auth()->user()->id : 'no auth'));
        if (!auth()->check()) {
        return redirect('/login');
    }
        if (!in_array(auth()->user()->role, $roles)) {
            abort(403, 'No tenés permiso para acceder a esta página.');
    }
        return $next($request);
    }
}
