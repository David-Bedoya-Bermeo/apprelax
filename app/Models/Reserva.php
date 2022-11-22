<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Habitacion;
use App\Models\Cliente;
use App\Models\Empleado;

class Reserva extends Model
{
    use HasFactory;

    public function users()
    { 
        return $this->belongsTo('App\Models\Users'); 
    }

    public function clientes()
    { 
        return $this->hasMany('App\Models\Cliente');     
    }

    public function empleados()
    { 
        return $this->hasMany('App\Models\Empleado');     
    }

   public function habitacions()
   {
     return $this->belongsTo('App\Models\Habitacion'); 
    }
}
