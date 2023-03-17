<?php

namespace Donejeh\Nuban;

use Donejeh\Nuban\Services\NubanApi;
use Illuminate\Support\ServiceProvider;

class NubanServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(NubanApi::class, function () {
            return new NubanApi();
        });
    }

    public function boot()
    {
        // code to boot your package
    }
}



?>
