<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;
use App\Models\Persona;

class EmpleadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emplado = new Empleado(); 
        $emplado->codigo=$request = '114349584590'; 
        $emplado->salario= '1400000';
        $emplado->estado= 'Activo'; 
        $emplado->tipoContrato= 'Indefinido'; 
        $emplado->fechaIngreso = '2011-01-12';
        $emplado->fechaRetiro = '';
        $emplado->save(); 

        $emplado = new Empleado(); 
        $emplado->codigo=$request = '11432948537'; 
        $emplado->salario= '1100000'; 
        $emplado->estado= 'Activo';
        $emplado->tipoContrato= 'Obra y labor'; 
        $emplado->fechaIngreso = '2001-06-12';
        $emplado->fechaRetiro = '';
        $emplado->save(); 
    }
}
