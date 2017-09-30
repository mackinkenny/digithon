<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctype extends Model
{
    //
    public function type()
    {
        return $this->hasOne('App/Type');
    }
}
