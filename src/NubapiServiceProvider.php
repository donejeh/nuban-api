<?php

namespace Donejeh\Nuban;

use Donejeh\Nuban\Commands\Install;
use Illuminate\Support\ServiceProvider;

class NubapiServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->bindNubapiSingleton();
        $this->publishConfig();
    }



    public function bindNubapiSingleton()
    {
        $this->app->singleton(Nubapi::class, function () {
            return new Nubapi;
        });
    }




    public function publishConfig()
    {
        $this->publishes([
            __DIR__ . '/../config/nubapi.php' => config_path('nubapi.php')
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/nubapi.php', 'nubapi');
    }

}

