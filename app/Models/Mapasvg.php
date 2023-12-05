<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapasvg extends Model
{
    use HasFactory;
    public function connectedUser()
    {
        return $this->hasMany('App/Models/Users');
    }

    public function departments()
    {
        return $this->hasMany('App/Models/Departamento');
    }
}
