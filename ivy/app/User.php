<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $attributes = [
        'state' => 1,
        'role' => 1,
        'token' => '1'
    ];

    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
        'password'
    ];

//    protected $hidden = [
//        'password',
//        'token'
//    ];
}
