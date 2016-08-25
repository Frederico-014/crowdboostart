<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function events ()
    {
        return $this->hasMany('App\Event','event_user_role');
    }

    public function users ()
    {
        return $this->hasMany('App\Event', 'event_user_role');
    }
}
