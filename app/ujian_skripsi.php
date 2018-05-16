<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ujian_skripsi extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
