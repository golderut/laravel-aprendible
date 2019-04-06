<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // IMPORTAR use Illuminate\Support\Facades\Route;
        Route::resourceVerbs([
            'create' => 'crear',
            'edit' => 'editar'
        ]);

    }
}
