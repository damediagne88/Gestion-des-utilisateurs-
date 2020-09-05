<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate(); //nous permets de supprimer table Users
        DB::table('role_user')->truncate(); // supprimer les relations 
        

        // ICI ON CREER DE NOUVEAU UTILISATEURS 

        $admin=User::create([
            'name' => 'admin',
            'email' => 'damediagnea@gmail.com',
            'password' =>Hash::make('password'),
        ]);

        $auteur=User::create([
            'name' => 'auteur',
            'email' => 'dame@gmail.com',
            'password' =>Hash::make('password'),
        ]);

        $utilisateur=User::create([
            'name' => 'utilisateur',
            'email' => 'damediagne@gmail.com',
            'password' =>Hash::make('password'),
        ]);

        // ICI ON RECUPERE LES ROLES 
        $adminRole = Role::where('name','admin')->first();
        $auteurRole = Role::where('name','auteur')->first();
        $utilisateurRole = Role::where('name','utilisateur')->first();

        // ICI ON ATTACHE LES UTILISATEURS A LEURS ROLE RESPECTIFS

        $admin->roles()->attach($adminRole);
        $auteur->roles()->attach($auteurRole);
        $utilisateur->roles()->attach($utilisateurRole);
    }
}
