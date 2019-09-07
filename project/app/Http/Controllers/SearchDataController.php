<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\RestaurantMenu;
use App\MenuItem;
use App\User;
use DB;
use Cookie;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Cart;
use Auth;
use App\Favourite;

class SearchDataController extends Controller
{

  public function create()
  {
   return view('search.create');
 }



 public function searchRestaurants(Request $request)
 {

  $lifetime = time() + 60 * 60 * 24 * 365;

  $data = new \App\Restaurant();

  $address=$request->get('full_address');

  $url = "https://maps.google.com/maps/api/geocode/json?key=AIzaSyDto4d4DM5gzo5uIDF9Mr4DS36V_hlHkK4&address=".urlencode($address);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);    
  $responseJson = curl_exec($ch);
  curl_close($ch);

  $response = json_decode($responseJson);

  if ($response->status == 'OK') {
    $latitude = $response->results[0]->geometry->location->lat;
    $longitude = $response->results[0]->geometry->location->lng;



  } 
  else {
    echo $response->status;
    var_dump($response);
  }


        // echo 'Latitude: ' . $latitude;
        // echo '<br />';
        // echo 'Longitude: ' . $longitude;
        // die();

  $cookielat = Cookie::queue('latitude', $latitude, $lifetime);
  $cookielong = Cookie::queue('longitude', $longitude, $lifetime);
  return redirect('get-restaurant');

}




public function getRestaurant()
{  
  $latitude =Cookie::get('latitude');
  $longitude =Cookie::get('longitude');

  $data['restaurants'] = DB::select(' select * from restaurants where restaurent_lat BETWEEN ("'.$latitude.'" - (1*0.018)) AND ("'.$latitude.'"+ (1*0.018)) AND  restaurent_lang BETWEEN ("'.$longitude.'" - (1*0.018)) AND ("'.$longitude.'" + (1*0.018))'); 
  return view('search.restaurantList',$data);

}



public function viewRestaurant($slug)
{

  $slug1 = str_replace('-',' ', $slug);

  $data=Restaurant::where('name','like',"%$slug1%")->first();

  $resId = $data['restaurant_id'];
  $data['restaurant'] = Restaurant::find($resId);

   $data['restaurantmenu']  =RestaurantMenu::join('restaurants', 'restaurants.restaurant_id', '=', 'restaurant_menus.restaurant_id')

  ->join('menu_items','menu_items.menu_id','=','restaurant_menus.id')

  ->select('restaurant_menus.menu_name','menu_items.item_name','menu_items.price','restaurants.restaurant_id','menu_items.menu_id','menu_items.id','restaurants.profile_image','restaurant_menus.menuimg')

  ->where('restaurants.restaurant_id',$resId)
  ->get();


            // favaourite

  $loginUserId = Auth::id();
  if ($loginUserId) {
    $favouriteStatus = Favourite::where([['restaurant_id','=',$resId],['user_id','=', $loginUserId]])->first();
    $data['restaurant']['favourite'] = $favouriteStatus ? $favouriteStatus->status : 0;
  }
  else {
    $data['restaurant']['favourite'] = 0;
  }

          //end favourite
  $data['cartdata'] =  Cart::getContent();
  return view('search.restaurant_menu_list',$data);
}




public function menuSearchResult(Request $request){

  $query = $request->input('query');
  $data['restaurantmenu']=RestaurantMenu::join('restaurants', 'restaurants.restaurant_id', '=', 'restaurant_menus.restaurant_id')
  ->join('menu_items','menu_items.menu_id','=','restaurant_menus.id')
                   //  ->where('menu_name',$request->search)
  ->where('menu_name', 'like', '%' . $request->search . '%')
  ->where('restaurants.restaurant_id',$request->rest_id)
  ->select('restaurant_menus.menu_name','menu_items.item_name','menu_items.price')
  ->paginate(5);
  return view('search.getfilter_menu', $data);

}

               // For Testing purpose
public function restoMenuSearch()
{
  return view('search.restomenusearch');
}



public function autocomplete(Request $request)
{
  $req = $request->input('query');
  $data = User::select("name")
  ->where("name","LIKE","%{$req}%")
  ->get();
  return response()->json($data);
}








public function getFilterMenu(Request $request){

  if(isset($request->menu)){

    $data['restaurantmenu']  =RestaurantMenu::join('restaurants', 'restaurants.restaurant_id', '=', 'restaurant_menus.restaurant_id')

    ->join('menu_items','menu_items.menu_id','=','restaurant_menus.id')      

    ->select('menu_items.item_name','menu_items.price','restaurant_menus.*')

    ->where('restaurants.restaurant_id',$request->rest_id)

    ->where('restaurant_menus.menu_name',$request->menu)

    ->paginate(20); 
  }



  elseif(isset($request->minimum_price,$request->maximum_price)&& !empty($request->minimum_price) && !empty($request->maximum_price)){


    $data['restaurantmenu']=RestaurantMenu::join('restaurants', 'restaurants.restaurant_id', '=', 'restaurant_menus.restaurant_id')

    ->join('menu_items','menu_items.menu_id','=','restaurant_menus.id')      

    ->select('restaurant_menus.*','menu_items.item_name','menu_items.price')

    ->where('restaurants.restaurant_id',$request->rest_id)

    ->whereBetween('menu_items.price',[$request->minimum_price,$request->maximum_price])

    ->paginate(20); 
  }

  elseif(isset($request->minimum_price,$request->maximum_price)&& isset($request->menu)){

   $data['restaurantmenu']=RestaurantMenu::join('restaurants', 'restaurants.restaurant_id', '=', 'restaurant_menus.restaurant_id')

   ->join('menu_items','menu_items.menu_id','=','restaurant_menus.id')      

   ->select('restaurant_menus.*','menu_items.item_name','menu_items.price','menu_items.type')

   ->where('restaurants.restaurant_id',$request->rest_id)

   ->whereBetween('menu_items.price',[$request->minimum_price,$request->maximum_price])

   ->paginate(20); 



 } 
 elseif($request->type) {


  $data['restaurantmenu']=RestaurantMenu::join('restaurants', 'restaurants.restaurant_id', '=', 'restaurant_menus.restaurant_id')
  ->join('menu_items','menu_items.menu_id','=','restaurant_menus.id')
  ->where('restaurants.restaurant_id',$request->rest_id)
  ->whereRaw("find_in_set('$request->type',type)")
  ->select('restaurant_menus.*','menu_items.item_name','menu_items.price','menu_items.id')
  ->paginate(5);
}
return view('search.getfilter_menu',$data);

}







}       















