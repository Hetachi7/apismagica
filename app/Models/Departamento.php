<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    public function historias(){
        return $this->hasMany('App/Models/Historia');
    }
    public function map()
    {
        return $this->belongsTo('App/Models/Mapasvg');
    }

}
