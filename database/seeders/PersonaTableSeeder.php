<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $persona = new Persona(); 
        $persona->nombre = 'David';
        $persona->a_paterno = 'Bedoya'; 
        $persona->a_materno = 'Bermeo'; 
        $persona->fecha_Nacimiento = '1996-02-08 ';
        $persona->edad = '26'; 
        $persona->tipo_Documento = 'Cedula Ciudadania';
        $persona->num_Documento = '1143453598';
        $persona->direccion = 'calle 33 # 34-22';
        $persona->telefono = '3125643299';
        $persona->email = 'admin@hotmail.com';
        $persona->save();
        
        $persona = new Persona(); 
        $persona->nombre = 'Carlos';
        $persona->a_paterno = 'Benitez'; 
        $persona->a_materno = 'Ortega'; 
        $persona->fecha_Nacimiento = '2000-04-18 ';
        $persona->edad = '25'; 
        $persona->tipo_Documento = 'Cedula Ciudadania';
        $persona->num_Documento = '1143432432';
        $persona->direccion = 'Av 33 # 34-22';
        $persona->telefono = '3132643299';
        $persona->email = 'user@hotmail.com';
        $persona->save(); 
    }
    
}
