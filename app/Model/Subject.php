<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
    
    public function short_name_url(){
        return strtolower($this->short_name);
    }

    public function tasks_not_expired(){
        return $this->tasks()->where('expires_at', '>', Carbon::now())->get();
    }
    
}
