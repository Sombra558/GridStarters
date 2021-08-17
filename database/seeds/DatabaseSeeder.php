<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;
use App\ConfiguracionPublica;
use App\PaymentPlatform;
use App\Currency;
use App\Planes;
class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        ConfiguracionPublica::create([
            'value' => 3,
            'nombre' => 'grid',
        ]);
        ConfiguracionPublica::create([
            'value' => 5,
            'nombre' => 'block',
        ]);  
        ConfiguracionPublica::create([
            'value' => 50,
            'nombre' => 'retiro',
        ]);
        ConfiguracionPublica::create([
            'value' => 5,
            'nombre' => 'tax',
        ]);
        PaymentPlatform::create([
            'name' => 'PayPal',
            'image' => 'img/payment-platforms/paypal.jpg',
            'subscriptions_enabled' => true,
        ]);
        PaymentPlatform::create([
            'name' => 'Stripe',
            'image' => 'img/payment-platforms/stripe.jpg',
            'subscriptions_enabled' => true,
        ]);
        PaymentPlatform::create([
            'name' => 'MercadoPago',
            'image' => 'img/payment-platforms/mercadopago.jpg',
        ]);
  
        PaymentPlatform::create([
            'name' => 'PayU',
            'image' => 'img/payment-platforms/payu.jpg',
        ]);
          
        $currencies = [
          'usd',
          'eur',
          'gbp',
          'jpy',
      ];
  
      foreach ($currencies as $currency) {
          Currency::create([
              'iso' => $currency,
          ]);
      }
        $user= User::create([
            'name' => 'Admin GridStarters',
            'email' => 'admin@gridstarters.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => Str::random(10),
          ]);
        $user->assignRole('Administrator');
        $user->markEmailAsVerified();
        Planes::create([
            'estado' => false,
            'columns' => '100',
            'name' => 'Influencer',
            'src' => '/img/planes/realidad-virtual.svg',
            'filas' => '100',
            'precio' => 49.99,
        ]);
        Planes::create([
            'estado' => false,
            'columns' => '80',
            'name' => 'Geek',
            'src' => '/img/planes/gafas-de-proteccion.svg',
            'filas' => '50',
            'precio' => 29.99,
        ]);
        Planes::create([
            'estado' => true,
            'columns' => '40',
            'name' => 'Starter',
            'filas' => '25',
            'precio' => 9.99,
        ]);
        
    }
}
