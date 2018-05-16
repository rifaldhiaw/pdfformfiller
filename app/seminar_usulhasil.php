<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seminar_usulhasil extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
