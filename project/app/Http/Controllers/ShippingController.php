<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShippingCharges;


class ShippingController extends Controller
{
    public function shippingView(){
    $data['page_title'] = "Shipping Charge List";
	$data['shipping']=ShippingCharges::all();
	return view('admin.shipping.shipping_view',$data);
    }
    public function shippingAdd(){
    $data['page_title'] = "Shipping Add";
	return view('admin.shipping.shipping_add',$data);
    }

    public function shippingStore(Request $request){
         $this->validate($request,[
        'country'=>'required', 
        'price'=>'required',
        'type'=>'required',
     ]);
    $shippings= new ShippingCharges;
    $shippings->country=$request->country;
    $shippings->price=$request->price;
    $shippings->type= $request->delivery_hour.":".$request->delivery_minutes;
    $shippings->save();
    return redirect('admin/shippings')->with('message','successfully store');
	
    }

    public function shippingEdit($id){
    $data['page_title'] = "Shipping Edit";
    $data['shipping']=ShippingCharges::findOrFail($id);
    return view('admin.shipping.shipping_edit',$data);
    } 
    public function shippingUpdate(Request $request,$id){
        $this->validate($request,[
        'country'=>'required', 
        'price'=>'required',
        'type'=>'required',
     ]);

   ShippingCharges::where('id',$id)
   ->update([
    'country'=> $request->country,
    'price'=> $request->price,
    'type'=> $request->delivery_hour.":".$request->delivery_minutes,
    
    ]);
    return redirect('admin/shippings')->with('message','successfully update');

	

    }
    public function shippingShow($id){
    $data['page_title'] = "Shipping View";
    $data['shipping']=ShippingCharges::findOrFail($id);
    return view('admin.shipping.shipping_show',$data);
    }

    public function shippingDestroy($id){
	$shipping=ShippingCharges::findOrFail($id);
    $shipping->delete();
    return redirect('admin/shippings')->with('message','Successfully Deleted');

    } 


}
