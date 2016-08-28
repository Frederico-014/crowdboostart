<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonces extends Model
{
    public function event ()
    {
        $this->belongsTo('App\Event','annonces');
    }
}
