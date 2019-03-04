<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    //
    /**
     * Get the post that owns the comment.
     */
    public function parentmenu()
    {
        return $this->belongsTo('App\Menu');
    }
}
