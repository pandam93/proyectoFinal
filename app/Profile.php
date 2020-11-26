<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
    'user_id', 'classroom', 'about',
    ];
    
    public function user() {
    return $this->belongsTo('App\User');
    }

    public function comments() {
        return $this->morphMany('App\Comment','commentable');
    }
}
