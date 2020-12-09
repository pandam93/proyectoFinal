<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    
    //Relations

    public function user(){
        return $this->belongsTo(User::class)->where('task_id', $this->task_id);

    }
}
