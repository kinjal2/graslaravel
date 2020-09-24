<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    //
    protected $table = 'userschema.usermaster';
    protected $primaryKey = 'uid';
    protected $fillable = [
        'email', 'password',
    ];
}
