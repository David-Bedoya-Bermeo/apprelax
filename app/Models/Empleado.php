<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reserva;
use App\Models\Persona;

class Empleado extends Model
{
    use HasFactory;

      public function personas()
    {
        return $this
        ->belongsTo('App\Models\Persona');
    }

    public function reservas()
    { 
        return $this
        ->hasMany('App\Models\Reserva');     
    }
}
