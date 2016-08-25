<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function event ()
    {
        $this->belongsTo('App\Event','event_com');
    }
}