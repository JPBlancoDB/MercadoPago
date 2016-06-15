<?php namespace JPBlancoDB\MercadoPago;

use Illuminate\Support\ServiceProvider;
use MP;

class MercadoPagoProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([ __DIR__ . '/config/mercadopago.php' => config_path('mercadopago.php') ]);
    }


    public function register()
    {
        $this->app->bind('mercadopago', function () {
            return new MP(config('mercadopago.mp_client'), config('mercadopago.mp_secret'));
        });
    }
}