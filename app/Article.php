<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'user_id', 'title', 'body',
        ];


        public function user() {
        return $this->belongsTo('App\User');
        }

        public function users() {
            return $this->belongsToMany('App\User');
            }
            
        /**
        * Get the tags for the article
        */
        public function tags() {
            return $this->belongsToMany('App\Tag');
        }
        /**
* Get all of the profiles' comments.
*/
public function comments(){
    return $this->morphMany('App\Comment', 'commentable');
    }

    /**
* Get all of the posts for the country.
*/
public function articles()
{
return $this->hasManyThrough('App\Article', 'App\User');
}
}
