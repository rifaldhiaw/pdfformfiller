<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengisian_krs extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
