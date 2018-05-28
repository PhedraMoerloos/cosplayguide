<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cosplay extends Model
{

    /*
    public static function boot()
    {
        parent::boot();

        static::saving(function ($this) {
            $this->slug = str_slug($this->name."-by-".$this->user->username);
        });
    }*/


    protected $fillable = [
        'name',
        'name_serie',
        'status',
        'thumbnail_url',
        'difficulty',
        'independence_percentage',
        'months_spent',
        'euros_spent',
        'project_description',
        'published_at'
    ];


    //meerdere cosplays behoren tot 1 user
    public function user()
    {

      return $this->belongsTo('App\User');

    }


    //een cosplay heeft meerdere fotos
    public function photos()
    {

      return $this->hasMany('App\Cosplayphoto');

    }

}
