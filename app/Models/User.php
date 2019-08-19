<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Mail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'level', 'email', 'password', 'CheckLogin',
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

    public function phongbans(){
       return $this->belongsToMany('App\Models\Phongban', 'phongban_user', 'user_id', 'phongban_id')->withPivot('id', 'ChucVu');
    }

    /*public function phongban_user(){
        return $this->hasMany('App\Models\Phongban_user', 'user_id');
     }*/
    
}
