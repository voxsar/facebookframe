<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourtCase extends Model
{
    //
    public function casetype()
    {
    	# code...
        return $this->belongsTo('App\CaseType');
    }

    public function court()
    {
    	# code...
        return $this->belongsTo('App\Court');
    }

    public function client()
    {
    	# code...
        return $this->belongsTo('App\User');
    }

    public function caseupdates()
    {
        # code...
        return $this->hasMany('App\CaseUpdate');
    }
}
