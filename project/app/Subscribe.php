<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
     protected $fillable = ['id','email'];


     protected $casts = [
        'email_verified_at' => 'datetime',
    ];
     
}
