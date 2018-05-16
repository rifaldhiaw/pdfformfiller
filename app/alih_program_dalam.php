<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alih_program_dalam extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
