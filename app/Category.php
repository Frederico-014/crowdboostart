<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function events()
    {
        return $this->hasMany('App\Event');
    }

    public function isCat($id)
    {
        return $this->id==$id;
    }
}
