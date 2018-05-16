<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_alumni extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
