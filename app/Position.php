<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App/User');
    }

    public function group()
    {
        return $this->hasOne('App/Group');
    }
}
