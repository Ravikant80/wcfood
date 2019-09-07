<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Auth;
use App\User;
use App\MenuItem;
use App\Coupon;
use App\ShippingCharges;
use App\Order;
use Validator;
use Response;
use Redirect;
use Alert;

class CartController extends Controller
{




  public function addToCart(Request $request ){

     $cart = Cart::add([
    'id'=>$request->id,
    'name'=>$request->name,
    'price'=>$request->price,
    'quantity'=>$request->quantity,
    ]);

   if($cart){
       session()->flash('message', 'Item Added Successfully to Your Cart.');
       Session::flash('type', 'success');
       Session::flash('title', 'Success');
       return redirect ('cart');
     }
     else{

       return redirect()->back()->with('notificationText', 'No Items!');

     }

  }

  public function addToCart1(Request $request ){

    session()->put('restaurant_id', $request->restaurant_id);
    $cart = Cart::add([
    'id'=>$request->id,
    'name'=>$request->name,
    'price'=>$request->price,
    'quantity'=>$request->quantity,
    ]);

    $data['cartdata'] = Cart::getContent();
 
    return view('cart.cart1',$data);

  }


   public function viewCart(){

    $data['cartdata'] = Cart::getContent();

    return view('cart.cart',$data)->with('message', ' Item  Added to  your Cart !');


   }




    public function deleteItem($id)
    {


     // print_r($id);
     // die;
    Cart::remove($id);

    // if (Cart::isEmpty()) {

    //    Cart::clear();
      
    //   }
   
    return redirect()->back()->with('message', ' Item Remove Successfully!!!');

    }


     public function updateQuantity(Request $request){

      Cart::update($request->cart_id, array(
        'quantity' => array(
      'relative' => false,
      'value' => $request->new_quantity
        )
    
      ));
  
     
     return Response::json(['success'=>true]);
    }

     public function updatePrice(Request $request){
      $condition2 = new Cart\CartCondition(array(
      'name' => 'Express Shipping $15',
      'type' => 'shipping',
      'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
      'value' => '+15',
      'order' => 1
    ));

    return Response::json(['success'=>true]);
    }


   



 public function checkout(){
  if(session::has('restaurant_id')){

     $data['restaurant_id'] = session()->get('restaurant_id');
     $data['cartdata'] = Cart::getContent();  
     $data['shippings']=ShippingCharges::where('status','enable')->get();
     return view('cart.checkout',$data);
  }else{
    return redirect()->back();
  }

 

  
}


     public function deliveryAddress(Request $request){
      $request->session()->put('delivery_address', $request->all()); 
      return redirect('checkout-init');
     }
    

      // public function applyCoupon(Request $request){

      //   $data=$request->all();
      //   $couponcount= Coupon::where('coupon_code',$data['coupon_code'])->count();
 
      //    if($couponcount == 0){

      //       return Redirect::back()->with('Error_Message','Coupon does not exits !');


      //        }else{

                       // $coupondetails= Coupon::where('status',$data['status'])->first();

                       //  if( $coupondetails->status == 0)
                       //  {

                       //     return Redirect::back()->with('Error_Message','Coupon is inactive !');

                       //  }



                        // $expire_date = $coupondetails->expire_date;
                        // $current_date=date('y-m-d');

                        // if($expire_date < $current_date){

                        //    return Redirect::back()->with('Error_Message','Coupon is expire !');


                        // }

                  //       echo "successsssssssssssssssssssss";

                  // }
   

  }

     


     
  
 
    




// }
