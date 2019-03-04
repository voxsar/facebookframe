<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Lawyer extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'oname', 'lname', 'address', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    //
    public function mobiles()
    {
        return $this->morphMany('App\Mobile', 'hasmobile');
    }

    /**
     * Get the comments for the blog post.
     */
    public function notifications()
    {
        return $this->hasMany('App\LawyerNotification');
    }
}
