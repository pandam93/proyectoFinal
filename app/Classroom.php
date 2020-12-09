<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //

    //Relations
    public $timestamps = false;


    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function teachers($role = 'pr'){
        return $this->belongsToMany(User::class)->where('role',$role);
    }

    public function students($role = 'st'){
        return $this->belongsToMany(User::class)->where('role',$role);
    }

    public function subjects(){
        return $this->hasMany(Subject::class);
    }
}
