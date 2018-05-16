<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alih_program_luar extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
