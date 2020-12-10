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
        'email', 'password',
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

    public function authorizeRoles($roles)
{
    abort_unless($this->hasAnyRole($roles), 401);
    return true;
}
public function hasAnyRole($roles)
{
    if (is_array($roles)) {
        foreach ($roles as $role) {
            if ($this->hasRole($role)) {
                return true;
            }
        }
    } else {
        if ($this->hasRole($roles)) {
             return true; 
        }   
    }
    return false;
}
public function hasRole($role)
{
    if ($this->roles()->where('name', $role)->first()) {
        return true;
    }
    return false;
}

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
        return $this->belongsToMany(Classroom::class)->withTimestamps();
    }
    
    public function comments(){
        return $this->hasMany(Comment::class,'student_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function getStudents()
    {
        return $this->belongsToMany('App\Role')->wherePivot('name', 'user');
    }
    
    public function isProfessor(){
        return $this->roles()->pluck('name')->first() === 'professor';
    }

    public function isStudent(){
        return $this->roles()->pluck('name')->first() === 'student';
    }

 

}
