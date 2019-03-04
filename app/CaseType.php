<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseType extends Model
{
    //
    public function case()
    {
    	# code...
    	return $this->hasMany('App\CourtCase', "casettype_id");
    }
}
