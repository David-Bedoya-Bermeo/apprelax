<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Persona; 
use App\Models\Role;



class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        
        $user = new User(); 
        $user->name = 'Admin'; 
        $user->email = 'admin@gmail.com'; 
        $user->password = bcrypt('secret'); 
        $user->avatar = 'admin.png';
        $user->save(); 
        $user->roles()->attach($role_admin);
    
        $user = new User(); 
        $user->name = 'User'; 
        $user->email = 'user@gmail.com'; 
        $user->avatar = 'defaul.png';
        $user->password = bcrypt('secret'); 
        $user->save(); 
        $user->roles()->attach($role_user);
       
      
    }
}
