<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Auth;
use App\Order;
use Response;
use Redirect;
use Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
     

    public function addDeliveryAddress(Request $request){

        $user = User::where('id',Auth::id())
               ->update([
                   'full_address'=>$request->full_address,
                   'street'=>$request->street,
                   'city'=>$request->city,
                   'state'=>$request->state,
                   'postcode'=>$request->postcode

               ]);

    return redirect()->back()->with('message','Address Successfully Change ');


    }

    public function updateDeliveryAddress(Request $request){


         $this->validate($request,[
            'full_address'=>'required', 
            'street'=>'required',
            'phone'=>'required',
            'state'=>'required',
            'city'=>'required',
            'postcode'=>'required',         
       
        ]);
         





        $user = User::where('id',Auth::id())
               ->update([
                   'phone' =>$request->phone,
                   'full_address'=>$request->full_address,
                   'street'=>$request->street,
                   'city'=>$request->city,
                   'state'=>$request->state,
                   'postcode'=>$request->postcode

               ]);

    return redirect()->back()->with('message','Address Successfully Change ');
    }


      public function myProfile(){                
      return view('cart.myprofile');
       }


     public function myOrder(){
       
            $uid = Auth::id();
            $data['userorders'] = Order::where('user_id',$uid)
                                 ->join('order_details','order_details.order_id', '=','orders.id')
                                 ->join('menu_items','menu_items.id', '=','order_details.menu_id')
                                 ->select('order_details.*','orders.*','menu_items.*')
                                ->OrderBy('orders.id','DESC')
                                ->get();
                                return view('cart.myorder',$data);
     }

   



      public function editAccountSetting(){
      return view('cart.account_setting');
      }


      public function updateAccountSetting(Request $request){
       $messages = [
         'phone.required' => 'Phone Number Must Be 10 Digit!',
        ];
        $validator = Validator::make($request->all(), [
        'city' => 'required|string',
        'full_address' => 'required|string',
        'street' => 'required|string',
        'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'email' => 'required|string| email|max:255|unique:users'
        

         ],$messages);

      if ($validator->fails()) {
       return redirect()->back()
                ->withErrors($validator)
                ->withInput();
    }


         
         $users = User::where('id',Auth::id())
               ->update([
                   'phone' =>$request->phone,
                   'full_address'=>$request->full_address,
                   'street'=>$request->street,
                   'city'=>$request->city,
                   'state'=>$request->state,
                    'email'=>$request->email
              

               ]);


      Alert::success('Successfully Updated!!')->autoclose(3000);
      return redirect ('/account-setting');


    }
     


}
