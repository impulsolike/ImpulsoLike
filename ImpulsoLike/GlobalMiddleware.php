<?php

namespace App\ImpulsoLike;

use Closure;

use App\ImpulsoLike\Localization\Localization;

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