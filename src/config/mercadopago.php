
<?php


return [
    /*
     |--------------------------------------------------------------------------
     | MercadoPago SDK
     |--------------------------------------------------------------------------
     |
     | Get your CLIENT_ID and CLIENT_SECRET in the following address: 
     | https://www.mercadopago.com/mla/herramientas/aplicaciones
     |
     */

    'mp_client' => env('MP_CLIENT', ''),
    'mp_secret' => env('MP_SECRET', ''),
];