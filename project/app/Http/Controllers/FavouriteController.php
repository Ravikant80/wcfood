<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Favourite;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Auth;
use App\Order;
use App\Restaurant;
use Response;
use Redirect;
use Alert;

class FavouriteController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function manageFavourite(Request $request) {
      $loginUserId   = Auth::id();
      $restaurant_id = $request->restaurant_id;
      $status        = $request->status;
      $existFavourite= Favourite::where([['restaurant_id','=',$restaurant_id],['user_id','=', $loginUserId]])->first();
      if ($existFavourite) {
        $existFavourite->status  = $status;
        $result = $existFavourite->save();
      }
      else {
        $favourite = new Favourite();
        $favourite->user_id = $loginUserId;
        $favourite->restaurant_id = $restaurant_id;
        $favourite->status  = $status; 
        $result = $favourite->save();
      }
      return json_encode(array('status'=>200, 'message'=>'Success', 'resultdata'=>$status));
    }


      public function myFavouriteRestaurant(){
      $uid = Auth::id();
      $data['favouritedata'] = Favourite::join('restaurants', 'restaurants.restaurant_id', '=', 'favourites.restaurant_id')  
                              ->select('restaurants.*')
                              ->where('favourites.user_id',$uid)
                              ->where('favourites.status','1')
                              ->get();
                              return view('cart/favourite',$data);
  }
}
