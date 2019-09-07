<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $fillable = ['order_id','restaurant_id','menu_id','item_id','quantity'];
}
