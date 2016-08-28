<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signalisations extends Model
{
    public function event ()
    {
        $this->belongsTo('App\Event','signalisations');
    }
}
