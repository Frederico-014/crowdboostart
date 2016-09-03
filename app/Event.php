<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable =['user_id','category_id','title','abstract','image',];

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

    public function getDateAttribute ($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }

    public function isTag($id)
    {
        foreach ($this->tags as $tag)
        {
            if($this->id == $id)
            {
                return true;
            }
        }
        return false;
    }

    public function scopesearch($query, $word)
    {
        return $query   ->whereHas('tags',function ($q)use ($word){
            $q->where('name','like','%'.$word.'%');
        })
            ->orWhere('title','like','%'.$word.'%');

    }
}
