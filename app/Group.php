<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    public function position()
    {
        return $this->belongsTo('App/Position');
    }

    public function types()
    {
        return $this->hasMany('App/Types');
    }
}
