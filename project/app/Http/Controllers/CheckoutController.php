<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\MenuItem;
use App\Restaurant;
use App\User;
use App\OrderDetails;
use App\Mail\OrderPlaced;
use Cart;
use Auth;
use Mail;
use Notification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use App\Notifications\OrderNotification;
use Illuminate\Notifications\Notifiable;


class CheckoutController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }

    public function init(Request $request){
         
        
        $payoption = $request->payment_option;

        if($payoption == 'Pay'){

        	return redirect('payment');
        }else{


         $order = Order::create([
          'user_id'=>Auth::id(),
          'user_name'=>Auth::user()->name,
          'billing_email'=>Auth::user()->email,
          'billing_address'=>Auth::user()->full_address,
          'billing_city'=>Auth::user()->city,
          'billing_state'=>Auth::user()->state,
          'billing_pincode'=>Auth::user()->postcode,
          'billing_country'=>'INDIA',
          'billing_phone'=>Auth::user()->phone,
          'billing_discount'=>0,
          'billing_discount_code'=>0,
          'billing_subtotal'=>Cart::getSubTotal(),
          'billing_tax'=>0,
          'billing_total'=>Cart::getTotal(),
          'order_status' =>'pending'

       	 ]);
	         $orderId =$order->id;

	         foreach (Cart::getContent() as $item) {
	          OrderDetails::create([
	            'order_id'=>$orderId,
	            'menu_id'=>$item->id,
	            'quantity'=>$item->quantity,
	          ]);

        }

        $restaurant_id = $request->restaurant_id;
        $rest = Restaurant::find($restaurant_id);
	      Mail::send(new OrderPlaced($order));
        Notification::send($rest, new OrderNotification($order));
        return redirect('/checkout/order/success')->with( ['orderdata' => $order] );
   	 }

	   // else{

    //      return redirect()->route('cart');
    //      }

        
   }

   



    
    public function OrderSuccess(){

    	 if(Session::has('orderdata')){
         $data['order'] =Session::get('orderdata');
         Cart::clear();
         session()->forget('delivery_address');
         return view('checkout/success',$data);

       }else{
         return redirect()->route('cart');
       }
    }



    public function userId(){
      $user_id = (auth()->check()) ? auth()->user()->id : null;
      dd($user_id);

    }
 

    public function accessSessionData() {
    $data['value'] =session()->get('my_name');
    $data['allsessiondata']=session()->all();
    return view('session',$data);
     }


     public function storeSessionData() {
        session()->put('my_name','Ravsadasdasikant');
        echo "Data has been added to session";
     }
     public function deleteSessionData() {
        session()->forget('my_name');
        echo "Data has been removed from session.";
     }

     

}
