<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //

    //Relations

    public function user(){
        return $this->belongsTo(User::class);
    }

}
