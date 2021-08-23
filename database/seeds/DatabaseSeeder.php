<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;
use App\ConfiguracionPublica;
use App\PaymentPlatform;
use App\Currency;
use App\Grip;
use App\Planes;
class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $user=User::find(1);
        $user->email="gerencia@alaxatech.com";
        $user->save();
        
       
    
    }
}
