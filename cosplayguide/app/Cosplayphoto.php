<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cosplayphoto extends Model
{

    protected $fillable = [
      'photo_url',
      'is_shown'
    ];


    //de foto's behoren tot 1 cosplay
    public function cosplay()
    {

      return $this->belongsTo('App\Cosplay');

    }

}
