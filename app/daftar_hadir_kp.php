<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftar_hadir_kp extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
