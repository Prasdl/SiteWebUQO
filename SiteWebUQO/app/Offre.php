<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    public $timestamps = false;

    public function User(){
        return $this->belongsTo('App/User');
    }
}
