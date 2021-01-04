<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    protected $fillable = [
                'title','body','category'
                ];

    //Relations

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function notes(){
        return $this->hasMany(Note::class);
    }

    public function note(){
         return $this->hasOne(Note::class);
    }

    

}
