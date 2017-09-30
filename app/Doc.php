<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    //Документыы связываются с типами (приказы, заявки)
    public function type ()
    {
        return $this->belongsTo('App\Type');
    }

}
