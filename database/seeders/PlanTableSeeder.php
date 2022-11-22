<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plan = new Plan(); 
        $plan->nombre=$request = 'Individual'; 
        $plan->descripcion
        = 'Habitacion para una persona'; 
        $plan->save();
        
        $plan = new Plan(); 
        $plan->nombre=$request = 'Duals'; 
        $plan->descripcion
        = 'Habitacion para dos personas'; 
        $plan->save(); 

        $plan = new Plan(); 
        $plan->nombre=$request = 'Family'; 
        $plan->descripcion
        = 'Habitacion para 4 personas'; 
        $plan->save(); 
    }
}
