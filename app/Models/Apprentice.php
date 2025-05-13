<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
     //belongs to lo lleva quien tenga la llave foranea
    public function Computer(){
       return $this->hasOne('App\Models\Computer');
    }
    public function Course(){
        return $this->belongsTo('App\Models\Course');
    }
}
