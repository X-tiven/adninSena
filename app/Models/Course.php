<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
     public function Apprentice(){
        return $this->hasMany('App\Models\Apprentice');
     }
     public function Trainingcenter(){
        return $this->belongsToMany('App\Models\Trainingcenter');
    }
    public function Area(){
        return $this->hasOne('App\Models\Area');
     }
     public function Teacher(){
        return $this->belongsToMany('App\Models\Teacher');
    }
}
