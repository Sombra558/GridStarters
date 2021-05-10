<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;
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
        $user= User::create([
            'name' => 'Admin GridStarters',
            'email' => 'admin@gridstarters.com',
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => Str::random(10),
          ]);
        $user->assignRole('administrador');
        $user->markEmailAsVerified();
    }
}
