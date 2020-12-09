<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    //Relations

    public function subject(){
        return $this->belongsTo(Subject::class);

    }

    public function notes(){
        return $this->hasMany(Note::class);
    }

    public function note($user_id){
         return $this->hasOne(Note::class)->where('user_id', $user_id)->first();
    }

}
