<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Phongban extends Authenticatable
{   
    use Notifiable;

    protected $table = 'phongban';

    public $timestamps = false;

    protected $fillable = [
        'TenPB',
    ];
}
