<?php

namespace App\ImpulsoLike;

use Closure;

class GlobalMiddleware
{

    public function handle($request, Closure $next)
    {
        
        /**
         * Agrega Middlewares aquí
         */

        return $next($request);

    }

}