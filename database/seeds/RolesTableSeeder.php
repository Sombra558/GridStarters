<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles= [
            'Administrator',
            'User'
          ];
          foreach($roles as $role){

            Role::create(['name'  => $role]);
          }
    }
}
