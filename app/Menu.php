<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    /**
     * Get the comments for the blog post.
     */
    public function submenus()
    {
        return $this->hasMany('App\Submenu');
    }
}
