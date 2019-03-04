<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    //
    public function hasmobile()
    {
    	# code...
    	return $this->morphTo();
    }
}
