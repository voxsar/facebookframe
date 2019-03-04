<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    //
    public function courttype()
    {
        return $this->belongsTo('App\CourtType', 'court_type_id');
    }

    public function case()
    {
    	# code...
    	return $this->hasMany('App\Case');
    }
}
