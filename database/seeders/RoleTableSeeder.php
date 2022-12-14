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
        $role->description = 'Usuario que permite hacer reservas'; 
        $role->save();

        $role = new Role();
        
        $role->name = 'resepcionista'; 
        $role->description = 'Resepcionista que permite hacer reservas'; 
        $role->save();

        $role->name = 'gerente'; 
        $role->description = 'Gerente tiene acceso atodo el sistema'; 
        $role->save();
    }
}
