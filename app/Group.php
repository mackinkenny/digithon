<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    public function positions()
    {
        return $this->HasMany('App/Positions');
    }

    public function types()
    {
        return $this->hasMany('App/Types');
    }
}
