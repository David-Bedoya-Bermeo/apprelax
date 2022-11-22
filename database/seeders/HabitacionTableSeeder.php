<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Habitacion;

class HabitacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $habitacion = new Habitacion(); 

        $habitacion->nombre = 'A1';
        $habitacion->numPiso = '1'; 
        $habitacion->tipo = 'Personal';
        $habitacion->descripcion = 'Habitacion Personal, Cama, mediana, con tv'; 
        $habitacion->estado = 'Disponible';
        $habitacion->imagen = '';
        
        
        $habitacion->save(); 

        $habitacion = new Habitacion(); 

        $habitacion->nombre = 'A2';
        $habitacion->numPiso = '1';
        $habitacion->tipo = 'Matrimonial'; 
        $habitacion->descripcion = 'Cama grande, tv'; 
        $habitacion->estado = 'Disponible';
        $habitacion->imagen = '';
        
        
        $habitacion->save(); 
    }
}
