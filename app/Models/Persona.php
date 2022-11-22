<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Empleado;
use App\Models\Cliente;

class Persona extends Model
{
  use HasFactory;
    
      public function users()
    {
        return $this
        ->hasOne('App\Models\User');
    }
    
     public function clientes()
    {
        return $this
        ->hasOne('App\Models\Cliente');
    }

      public function empleados()
    {
        return $this
        ->hasOne('App\Models\Empleado');
    }
}
