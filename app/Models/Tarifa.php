<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plan;

class Tarifa extends Model
{
    use HasFactory;

     public function plans()
    {
        return $this
        ->hasOne('App\Models\Plan');
    }
}
