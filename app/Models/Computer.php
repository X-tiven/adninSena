<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    public function Apprentice(){
        return $this->belongsTo('App\Models\Apprentice');
    }
}
