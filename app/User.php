<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public function role(){
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function article(){
        return $this->hasMany('App\Article');
    }

    public function comments(){
        return $this->hasMany('App\Comment', 'user_id');
    }


    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'img'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
