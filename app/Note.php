<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    
    //Relations

    public function task(){
        return belongsTo(Task::class);
    }
}
