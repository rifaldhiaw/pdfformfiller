<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar_kp extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
