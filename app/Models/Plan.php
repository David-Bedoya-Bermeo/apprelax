<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tarifa;
use App\Models\Habitacion;

class Plan extends Model
{
    use HasFactory;

     public function servicios() 
    { 
        return $this 
        ->belongsToMany('App\Models\Servicio');     
    }

     public function tarifas()
    {
        return $this
        ->belongsTo('App\Models\Tarifa');
    }
}
