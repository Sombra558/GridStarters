<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;
use App\ConfiguracionPublica;
use App\PaymentPlatform;
use App\Currency;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
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
    }
}
