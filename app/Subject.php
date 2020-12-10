<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $timestamps = false;


    //Relations

    public function classroom(){
        return $this->belongsTo(Classroom::class);
    }

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }
    
}
