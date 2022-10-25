<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();

        $role->name = 'admin';
        $role->description = 'Usuario Administrador de la aplicacion';
        $role->save();

        $role = new Role();
        
        $role->name = 'user'; 
        $role->description = 'Usuario qe permite hacer reservas'; 
        $role->save();
    }
}
