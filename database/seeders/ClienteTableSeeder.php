<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente; 

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cliente = new Cliente(); 
        $cliente->tipo_Cliente = 'Particular'; 
        $cliente->nombreEmpresa= ''; 
        $cliente->nit=''; 
        $cliente->pais = 'Argentina';
        $cliente->save(); 
    
        $cliente = new CLiente(); 
        $cliente->tipo_Cliente = 'Empresa'; 
        $cliente->nombreEmpresa= 'Webs Net'; 
        $cliente->nit='7348392048'; 
        $cliente->pais = 'Colombia';
        $cliente->save(); 
    }
}
