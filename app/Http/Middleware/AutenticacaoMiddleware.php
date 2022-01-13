<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    public function handle($request, Closure $next)
    {
        // return $next($request);
        return Response('Acesso negado! A rota exige autenticação.');
    }
}
