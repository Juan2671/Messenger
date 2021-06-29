<?php

namespace App\Providers;

use App\Models\Mensajes;
use App\Observers\ObservadorMensajes;
use Illuminate\Support\ServiceProvider;

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
        Mensajes::observe(ObservadorMensajes::class);
    }
}
