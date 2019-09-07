<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use App\RestaurantCategory;
use Validator,Redirect,Response,File;
use DB;
use App\RestaurantMenu;
use App\MenuItem;
use Image;


class RestaurantController extends Controller
{

    public function __construct(){

     $this->middleware('auth:admin');
 }

 public function index()
 {
    $data['page_title'] = "Restaurants List";
    $data['restaurants'] = Restaurant::all();
    return view('admin.restaurant.restaurant-list',$data);
}


public function create()
{
    $data['page_title'] = "Add New Restaurants";
    $data['categories'] = RestaurantCategory::all();
    return view('admin.restaurant.restaurant-create',$data);
}


public function store(Request $request)
{



    $this->validate($request,[
        'name'=>'required', 
        'opening_hour'=>'required',
        'ending_hour'=>'required',
        'category'=>'required',
            //'price_range'=>'required',
            //'email'=>'required|unique:restaurents|email',
        'password'=>'required|min:8',
        'descriptions'=>'required',
        'cont_p_name'=>'required',
        'cont_P_email'=>'required',
        'cont_p_phone'=>'required',
        'min_order_price'=>'required',
        'full_address'=>'required',
        //'profile_image'=>'required',
        'profile_image.*' => 'required | mimes:jpeg,png,jpg|max:2048',


    ]);


    $restaurents = new Restaurant;
    $restaurents->name= $request->name;
    $restaurents->opening_time= $request->opening_hour.":".$request->opening_minutes;
    $restaurents->ending_time= $request->ending_hour.":".$request->ending_minutes;
    // $restaurents->category= $request->category;
    //$restaurents->price_range= $request->price_range;
    $restaurents->price_range= $request->pricep.":".$request->pperson;
    $restaurents->email= $request->email;
    $restaurents->password= $request->password;
    $restaurents->descriptions= $request->descriptions;
    $restaurents->cont_p_name= $request->cont_p_name;
    $restaurents->cont_p_email= $request->cont_P_email;
    $restaurents->cont_p_phone= $request->cont_p_phone;
    $restaurents->min_order_price= $request->min_order_price;
    $restaurents->full_address= $request->full_address;
    $restaurents->postal_code= $request->postalcode;
    $restaurents->country= $request->country;
    $restaurents->restaurent_lat= $request->latitude;
    $restaurents->restaurent_lang= $request->longitude;
    $category = $request->input('category');
    $category = implode(',', $category);
    $restaurents->category=$category;




    $image = $request->profile_image;
    $filename = $image->getClientOriginalName();
    $storagePath='assets/upload/restaurant/'.$filename;
    Image::make($image)->save($storagePath);
    $restaurents->profile_image= $filename;
    $restaurents->remember_token= $request->_token;
    $restaurents->save();
    return redirect ('admin/restaurants')->with('message','Restaurent Successfully Added');
}



public function edit(Request $request,$id)
{

    $data['page_title'] = "Edit Restaurant";   
    $data['restaurant']=Restaurant::findOrFail($id);
    $data['categories'] = RestaurantCategory::all();
    

    return view('admin.restaurant.edit_restaurant',$data);


}


public function update(Request $request, $id)
{





   $this->validate($request,[
    'name'=>'required', 
    'opening_hour'=>'required',
    'ending_hour'=>'required',
    'category'=>'required',
    'email'=>'required|email',name
    'password'=>'required|min:8',
    'descriptions'=>'required',
    'cont_p_name'=>'required',
    'cont_P_email'=>'required',
    'cont_p_phone'=>'required',
    'min_order_price'=>'required',
    'full_address'=>'required',
    'profile_image' => 'required',
    'profile_image.*' => 'profile_image|mimes:jpeg,png,jpg,gif,svg|max:2048'

]);


   if($request->hasFile('profile_image')){

       $image = $request->profile_image;
       $filename = $image->getClientOriginalName();
       $storagePath='assets/upload/restaurant/'.$filename;
       Image::make($image)->save($storagePath);

       $restaurants=Restaurant::where('restaurant_id',$id)
       ->update(['profile_image'=>$filename ]);


   }


   Restaurant::where('restaurant_id',$id)
   ->update([
    'name'=> $request->name,
    'opening_time'=> $request->opening_hour.":".$request->opening_minutes,
    'ending_time'=> $request->ending_hour.":".$request->ending_minutes,
    'price_range'=> $request->pricep.":".$request->pperson,
    //'category'=> $request->category,
    'category' =>implode(',',$request->category),             
    'price_range'=> $request->price_range,
    'email'=> $request->email,
    'password'=> $request->password,
    'descriptions'=> $request->descriptions,
    'cont_p_name'=> $request->cont_p_name,
    'cont_p_email'=> $request->cont_P_email,
    'cont_p_phone'=> $request->cont_p_phone,
    'min_order_price'=> $request->min_order_price,
    'full_address'=> $request->full_address,
    'postal_code'=> $request->postalcode,
    'country'=> $request->country,
    'restaurent_lat'=> $request->latitude,
    'restaurent_lang'=> $request->longitude,


]);
       // $restaurents->remember_token= $request->_token;

   return redirect('admin/restaurants')->with('message','successfully updated');


}





public function destroyRestaurant($id)
{
    $restaurant = Restaurant::find($id);
    $restaurant->delete();

}
public function getRestaurantCategory(){

    $data['page_title'] = " Restaurant Category";
    $data['categories'] = RestaurantCategory::all();
    return view('admin.restaurant.restaurant-category',$data);
}

public function addRestaurantCategory(){

    $data['page_title'] = "Add Restaurant Category";
    return view('admin.restaurant.add-restaurant-category',$data);

}
public function storeRestaurantCategory(Request $request){

    $data['page_title'] = "Add Restaurant Category";
    $category =new RestaurantCategory;
    $category->category_name =$request->category_name;
    $category->category_description =$request->category_description;
    $category->save();
    return redirect('admin/restaurant-category');

}
public function editRestaurantCategory($id){
    $data['page_title'] = "Edit Restaurant Category";
    $data['restoCategory'] =RestaurantCategory::find($id);
    return view('admin.restaurant.edit-restaurant-category',$data);
}

public function updateRestaurantCategory(Request $request, $id){
 RestaurantCategory::where('category_id',$id)
 ->update([

    'category_name'=> $request->category_name,
    'category_description'=> $request->category_description,

]);

 return redirect('admin/restaurant-category')->with('message','successfully updated');
}

public function destroyRestaurantCategory($id){
    $restaurantcategory = RestaurantCategory::find($id);
    $restaurantcategory->delete();
    return redirect ('admin/restaurant-category')->with('message','successfully deleted');
}





public function getMenu(){
    $data['page_title'] = " Restaurant Menu";
    $data['menus']= RestaurantMenu::join('restaurants', 'restaurant_menus.restaurant_id', '=', 'restaurants.restaurant_id')
    ->select('restaurants.name','restaurant_menus.*')
    ->get();
    return view('admin.restaurant.restaurant-menu' ,$data);
}



public function regMenu($id){
 $data['page_title'] = "Add Restaurant Menu";
 $data['restaurant'] = Restaurant::find($id);
 return view('admin.restaurant.add-restaurant-menu',$data);
}

public function storeMenu(Request $request){

        //print_r($request->all());
        //die;
    $this->validate($request,[
        'menu_name' => 'required',
        'menu_description' => 'required|max:255'
    ]);

    $menus = new RestaurantMenu;
    $menus->restaurant_id= $request->restaurant_id;
    $menus->menu_name= $request->menu_name;
    $menus->menu_description= $request->menu_description;

    $image = $request->menuimg;
    $filename = $image->getClientOriginalName();
    $storagePath='assets/upload/restaurant/'.$filename;
    Image::make($image)->save($storagePath);
    $menus->menuimg= $filename;
    $menus->save();
    return redirect ('admin/restaurant-menus')->with('message','Menu successfully added');

    }

    public function editMenu($id){
	$data['menu']=RestaurantMenu::findOrFail($id);
    $data['page_title'] = "Edit Restaurant Menu";
    return view('admin.restaurant.edit-restaurant-menu',$data);
    }


    public function updateMenu(Request $request, $id){
	$this->validate($request,[
        'menu_name' => 'required',
        'menu_description' => 'required|max:255'
    ]);



   if($request->hasFile('menuimg')){

       $image = $request->profile_image;
       $filename = $image->getClientOriginalName();
       $storagePath='assets/upload/restaurant/'.$filename;
       Image::make($image)->save($storagePath);

       $restaurants=RestaurantMenu::where('id',$id)
       ->update(['menuimg'=>$filename ]);


   }


   RestaurantMenu::where('id',$id)
   ->update([

    'menu_name' => $request->menu_name,
    'menu_description' => $request->menu_description
]);

   return redirect ('admin/restaurant-menus')->with('message','successfully updated');
}
    public function viewMenu ($id){

	   $data['menu'] = DB::table('menus')->select('id')
    ->where('id', '=', $id)
    ->first();

 return view('admin.view_menu',$data);

}
    public function destroyMenu($id){
    $menu = RestaurantMenu::find($id);

    $menu->delete();
    return redirect ('admin/restaurant-menus')->with('message','successfully deleted');
}

public function getMenuItem($id){
 $data['page_title'] = "Menu Items";
 $data['menus']= MenuItem::join('restaurant_menus', 'menu_items.menu_id', '=', 'restaurant_menus.id')
 ->select('restaurant_menus.menu_name','menu_items.*')
 ->where('restaurant_menus.id',$id)
 ->get();
      // $data['menu'] = MenuItem::all();
 return view('admin.restaurant.menu-items',$data);
}

public function addMenuItem($id){

 $data['page_title'] = "Add Menu Items";
 $data['menu'] = RestaurantMenu::find($id);
 return view('admin.restaurant.add-menu-item',$data);
}

public function storeMenuItem(Request $request){
  $this->validate($request,[
    'item_name' => 'required',
    'type' => 'required',
    'price' => 'required|max:10'
]);
  $menus = new MenuItem;
  $menus->menu_id= $request->menu_id;
  $menus->item_name= $request->item_name;
  $menus->type= $request->type;
  $menus->price= $request->price;
  $image = $request->itmimage;
  $filename = $image->getClientOriginalName();
  $storagePath='assets/upload/restaurant/'.$filename;
  Image::make($image)->save($storagePath);
  $menus->itmimage= $filename;
  $menus->save();
  return redirect('admin/menu-items/'.$request->menu_id)->with('message','Menu Items Added successfully');

}

public function editMenuItem($id){
    $data['page_title'] = "Add Menu Items";
    $data['menuitem'] = MenuItem::find($id);
    return view('admin.restaurant.edit-menu-items',$data);
}


public function updateMenuItem(Request $request, $id){
    $this->validate($request,[
        'item_name' => 'required',
        'type' => 'required',
        'price' => 'required|max:10'

        
    ]);
    if($request->hasFile('itmimage')){

       $image = $request->profile_image;
       $filename = $image->getClientOriginalName();
       $storagePath='assets/upload/restaurant/'.$filename;
       Image::make($image)->save($storagePath);

       $restaurants=MenuItem::where('id',$id)
       ->update(['itmimage'=>$filename ]);


   }

     MenuItem::where('id',$id)
    ->update([
    'item_name'=> $request->item_name,
    'type'=> $request->type,
    'price'=> $request->price,   

]);

    return redirect ('admin/restaurant-menus')->with('message','successfully updated');
}


    public function destroyMenuItem($id){
    $menutem=MenuItem::find($id);
    $menutem->delete();
    return Redirect::back()->with('message','successfully deleted');
    
}


}