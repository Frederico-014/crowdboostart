<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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

    public function events ()
    {
        return $this->hasMany('App\Event');
    }

    public function profiles()
    {
        return $this->belongsToMany('App\Profile');
    }

    public function event ()
    {
        return $this->hasMany('App\Event','event_user_role');
    }

    public function roles ()
    {
        return $this->hasMany('App\Role', 'event_user_role');
    }

    public function isAdmin ($right='admin')
    {
        return $this->right == $right;
    }

    public function com_events ()
    {
        return $this->hasMany('App\Event','event_user_role');
    }

}
