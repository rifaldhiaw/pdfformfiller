<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perbaikan_nilai extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
