<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Restaurant;
use Illuminate\Support\Facades\Validator;
use Notification;
use Session;
use Auth;
class RestaurantDashboardController extends Controller
{
    
    public function __construct(){
       
      $this->middleware('auth:restaurant');
    }


    public function index(){  
       $data['page_title']='Restaurant Dashboard';
       return view ('restaurant.index',$data);
       
    }

     public function getRestaurantNotification(Request $request){
    		
        $data['page_title']='Notification Details';
        $uid = Auth::guard('restaurant')->user()->restaurant_id;
        $data['restaurant'] = Restaurant::find($uid);

        // print_r($data);
        // die;
    		return view('restaurant.get_rest_notification',$data);



    }

}
