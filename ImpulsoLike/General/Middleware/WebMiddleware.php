<?php

namespace App\ImpulsoLike\General\Middleware;

use Closure;

class WebMiddleware
{

    public function handle($request, Closure $next)
    {

        /**
         * Escribe las funciones aquí
         */

        return $next($request);

    }

}