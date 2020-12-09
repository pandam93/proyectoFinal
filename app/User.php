<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The messages stuffs
     */

         // A user can send a message
    public function sent()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    // A user can also receive a message
    public function received()
    {
        return $this->hasMany(Message::class, 'sent_to_id');
    }

    //Relations

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function classrooms(){
        return $this->belongsToMany(Classroom::class);
    }

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class,'student_id');
    }

    public function subject(){
        return $this->belongsToMany(Subject::class)->first();
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class);
    }

 

}
