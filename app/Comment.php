<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    //Relations

    public function student(){
        return $this->belongsTo(User::class,'student_id');
    }

    public function professor(){
        return $this->belongsTo(User::class,'professor_id');
    }
}
