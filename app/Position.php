<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //
    public function users()
    {
        return $this->hasMany('App/Users');
    }

    public function group()
    {
        return $this->belongsTo('App/Group');
    }
}
