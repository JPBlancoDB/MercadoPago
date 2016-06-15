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
    
2) Ejemplo de uso:

  Usar el facade "MercadoPago":

        $preference_data = array(
            "items" => array(
                array(
                    "title" => "Title of what you are paying for",
                    "currency_id" => "ARS",
                    "category_id" => "Category",
                    "quantity" => 1,
                    "unit_price" => 10.2
                )
            )
        );
        
        $preference = MercadoPago::create_preference($preference_data);
        
      
  
  
