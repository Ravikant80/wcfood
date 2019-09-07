<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Admin;
use Illuminate\Support\Facades\Validator;
use Notification;
use Session;
use Alert;
use App\Coupon;


class ADashboardController extends Controller
{
    public function __construct(){
       
       $this->middleware('auth:admin');
    }


    public function index(){  
       $data['page_title']='Admin Dashboard';
       return view ('admin_dashboard.index',$data);
       
    }

  
        public function couponList(){

        $data['page_title'] = "Coupon List";
        $data['coupons'] = Coupon::all();
        return view ('admin.coupon.coupon_list',$data);

        }


       public function createCoupon(){

        $data['page_title']='Add Coupon';
       
       return view ('admin.coupon.create_coupon',$data);
       
      }


      public function storeCoupon(Request $request)
      { 

 
     $validator = Validator::make($request->all(), [
    'amount' => 'required|',
    'coupon_code' => 'required|unique:coupons|max:255'
  
    

    ]);

    if ($validator->fails()) {
    return redirect()->back()
                ->withErrors($validator)
                ->withInput();
    }
       

      
      $coupons=new Coupon;
      $coupons->coupon_code=$request->coupon_code;
      $coupons->amount=$request->amount;
      $coupons->expire_date=$request->expire_date;
      $coupons->status=$request->status;
      $coupons->amount_type=$request->amount_type;
      $coupons->save();
      return redirect ('admin/coupons')->with('message','Coupon Successfully Added');

     }


    public function editCoupon(Request $request,$id){

    $data['page_title'] = "Edit Coupon";   
    $data['coupon']=Coupon::findOrFail($id);


  return view ('admin.coupon.edit_coupon',$data);
  
    }


   public function updateCoupon(Request $request, $id)
  {

    
       Coupon::where('id',$id)
       ->update([
        'coupon_code'=> $request->coupon_code,
        'amount'=> $request->amount,
        'expire_date'=> $request->expire_date,
        'status'=> $request->status,
        'amount_type'=> $request->amount_type
         
        
      ]);
    

        return redirect('admin/coupons')->with('message','successfully updated');
    
  }




      public function destoroyCoupon($id)
      {
          $coupon = Coupon::find($id);
          $coupon->delete();
          return redirect('admin/coupons')->with('message','successfully deleted');

      }


        



     
}       
            
        

        
