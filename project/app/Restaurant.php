<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Restaurant extends Authenticatable
{
   use SoftDeletes;
   use Notifiable;

   protected  $table ="restaurants";
   protected  $primaryKey ="restaurant_id";
   
}
