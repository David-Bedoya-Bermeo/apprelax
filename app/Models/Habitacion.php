<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    public function plans() 
    { 
        return $this 
        ->belongsToMany('App\Models\Plan');     
    }

    public function reservas(){ 
        return $this->hasMany('App\Models\Reserva');     
    }
}
