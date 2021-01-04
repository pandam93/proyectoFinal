<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //

    //Relations
    public $timestamps = false;


    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function subjects(){
        return $this->hasMany(Subject::class);
    }
}
