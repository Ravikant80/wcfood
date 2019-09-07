<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class RestaurantCategory extends Model
{
   use SoftDeletes;
   protected  $table ="restaurant_categories";
   protected  $primaryKey ="category_id";
}
