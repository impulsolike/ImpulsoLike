<?php

namespace App\ImpulsoLike;

use Illuminate\Support\ServiceProvider;

class GlobalProvider extends ServiceProvider
{

    public function register()
    {
        /**
         * Registra tus Facades aquí
         */
        require_once app_path('/ImpulsoLike/Vendor/Facade.php');
    }

}