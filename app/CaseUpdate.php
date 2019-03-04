<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseUpdate extends Model
{
    //
    public function courtcase()
    {
    	# code...
        return $this->belongsTo('App\CourtCase');
    }
}
