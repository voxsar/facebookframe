<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourtType extends Model
{
    //
    public function courts()
    {
    	# code...
    	return $this->hasMany('App\Court');
    }
}
