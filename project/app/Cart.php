<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table='carts';
    protected $primaryKey='id';
    protected $fillable=['id','price','quantity','menu_name','session_id'];
}
