<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengambilan_data extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
