# MercadoPago

1) Instalacion

  a) composer require jpblancodb/mercadopago
  b) Agregar en config/app en el array de providers
  
   'providers' => [
      
      JPBlancoDB\MercadoPago\MercadoPagoProvider::class
      
  c) Agregar en config/app en el array de aliases:
  
  'aliases' => [
      
      'MercadoPago' => JPBlancoDB\MercadoPago\MercadoPago::class
  
  d) ejecutar "php artisan vendor:publish"
  
  e) agregar en el .env:
  
  MP_CLIENT=
  MP_SECRET=
  
  
