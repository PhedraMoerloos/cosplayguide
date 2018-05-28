<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cosplay extends Model
{

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
