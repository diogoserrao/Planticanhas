<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Verificação simples - se usuário está logado e é admin
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }
        
        // Caso não seja admin, redireciona
        return redirect('/')->with('error', 'Acesso não permitido.');
    }
}
