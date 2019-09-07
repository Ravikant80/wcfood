<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tzsk\Payu\Facade\Payment;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use App\Order;
use App\CancelOrder;
use App\OrderDetails;
use App\Mail\OrderPlaced;
use App\Mail\CancelMail;
use App\Notifications\OrderNotification;
use Auth;
use Cart;
use Redirect;
use Alert;
use PDF;
use Notification;
use App\User;
class PaymentController extends Controller
{
    
    public function __construct(){

        $this->middleware('auth');
    }
   

    public function payment(){

    	$attributes = [
			    'txnid' => strtoupper(str_random(8)), # Transaction ID.
			    'amount' => Cart::getTotal(), # Amount to be charged.
			    'productinfo' => "Wc Food ",
			    'firstname' => Auth::user()->name, # Payee Name.
			    'email' => Auth::user()->email, # Payee Email Address.
			    'phone' => Auth::user()->phone, # Payee Phone Number.
			];

		return Payment::make($attributes, function ($then) {
		    $then->redirectTo('payment/status');
		    
		});
    }



 	public function status(Request $request){

      
        $payment = Payment::capture();
        
        
         print_r($payment);

         echo $payment->transaction_id;
      
         $capture = $payment->isCaptured();
    
     

      	$data =$payment->payment_id;
        
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
          'payment_id'=>$payment->payment_id,
          'transaction_id'=>$payment->transaction_id,
          'order_status'=>'pending'

        ]);
         $orderId =$order->id;

         foreach (Cart::getContent() as $item) {
          OrderDetails::create([
            'order_id'=>$orderId,
            'menu_id'=>$item->id,
            'quantity'=>$item->quantity,
          ]);

        }
          
      //$user = User::first();
         
       Mail::send(new OrderPlaced($order));
       
      //Notification::send($user, new OrderNotification($order));

      // dd('done');
     //  auth()->user()->notify( new OrderNotification($order));
     	return redirect('/checkout/order/success')->with( ['orderdata' => $order] );
    
    

    

      

    }



    public function paymentCancel(Request $request){


    //Mail::send(new CancelMail($order));
    return view('checkout.checkout-cancel', ['data' => $request->all()]);
     

     }


    
      
    	


  



   
}
