<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Note extends Model
{
    //
    
    //Relations

    public function task(){
        return $this->belongsTo(Task::class);
    }

    public function noteDoneAndNotificable(){
        if($this->done && $this->updated_at->between(Carbon::Yesterday(),Carbon::now())){
            return $this;
        }else{ 
            return false;
        }
    }

    public function student(){
        return $this->belongsTo(User::class);
    }
}
