<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    //
    use Notifiable;

    //protected $guard = 'login';
    protected $table = 'userschema.login';
    protected $primaryKey = 'loginid';

    protected $fillable = [
        'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];  

}
