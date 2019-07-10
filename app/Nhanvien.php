<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Nhanvien extends Authenticatable
{
    use Notifiable;
    
    protected $table = 'nhanvien';

    protected $fillable = [
        'username', 'password', 'level', 'CheckLogin',
    ];

}