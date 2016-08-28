<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function institution()
    {
        return $this->belongsTo('App\Institutions');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function medias ()
    {
        return $this->hasMany('App\Media');
    }

    public function comments ()
    {
        return $this->hasMany('App\Comment','event_com');
    }

    public function annonces ()
    {
        return $this->hasMany('App\Comment','annonces');
    }

    public function signalisations ()
    {
        return $this->hasMany('App\Comment','signalisations');
    }

    public function roles ()
    {
        return $this->hasMany('App\Role','event_user_role');
    }

    public function users ()
    {
        return $this->hasMany('App\User', 'event_user_role');
    }
}
