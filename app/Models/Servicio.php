<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

      public function habitacions() 
    { 
        
        return $this 
        ->belongsToMany('App\Models\habitacion') 
        ->withTimestamps(); 
        
    }
     public function plans() 
    { 
        
        return $this 
        ->belongsToMany('App\Models\Plan') 
        ->withTimestamps(); 
        
    }
}
