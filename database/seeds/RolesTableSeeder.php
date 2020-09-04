<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate(); //nous permets de supprimer table Role 

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'auteur']);
        Role::create(['name' => 'utilisateur']);
    }
}
