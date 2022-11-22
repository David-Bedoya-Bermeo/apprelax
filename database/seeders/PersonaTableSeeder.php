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
        $persona->fecha_Nacimiento = '1996-02-08';
        $persona->edad = '26';
        $persona->tipo_Documento = 'Cedula Ciudadania';
        $persona->num_Documento = '1143453598';
        $persona->direccion = 'calle 33 # 34-22';
        $persona->telefono = '3125643299';
        $persona->email = 'admin@gmail.com';
        
        $persona->save();
        
        $persona = new Persona(); 
        $persona->nombre = 'Carlos';
        $persona->a_paterno = 'Benitez'; 
        $persona->a_materno = 'Ortega'; 
        $persona->fecha_Nacimiento = '2000-04-18';
        $persona->edad = '20';
        $persona->tipo_Documento = 'Cedula Ciudadania';
        $persona->num_Documento = '1143432432';
        $persona->direccion = 'Av 33 # 34-22';
        $persona->telefono = '3132643299';
        $persona->email = 'user@gmail.com';
        
        $persona->save(); 


        $persona = new Persona(); 
        $persona->nombre = 'Camila';
        $persona->a_paterno = 'Suarez'; 
        $persona->a_materno = 'Ortiz'; 
        $persona->fecha_Nacimiento = '2001-04-18';
        $persona->edad = '21';
        $persona->tipo_Documento = 'Cedula Ciudadania';
        $persona->num_Documento = '1143432432';
        $persona->direccion = 'Av 33 # 34-22';
        $persona->telefono = '3132643299';
        $persona->email = 'cami@gmail.com';
        
        $persona->save(); 

        $persona = new Persona(); 
        $persona->nombre = 'Maria';
        $persona->a_paterno = 'Benjumea'; 
        $persona->a_materno = 'Cataño'; 
        $persona->fecha_Nacimiento = '2002-04-18';
        $persona->edad = '20';
        $persona->tipo_Documento = 'Cedula Ciudadania';
        $persona->num_Documento = '1143432432';
        $persona->direccion = 'Av 33 # 34-22';
        $persona->telefono = '3132643299';
        $persona->email = 'maria@gmail.com';
        
        $persona->save(); 
    }
}





