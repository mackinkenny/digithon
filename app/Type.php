<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //

    public function doctype()
    {
        return $this->belongsTo('App/Doctype');
    }

    public function docs()
    {
        return $this->hasMany('App/Doc');
    }
}
