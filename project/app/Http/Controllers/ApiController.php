<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Restaurant;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Hash;
use Cart;

class ApiController extends Controller
{
    
public function register(Request $request) {
        
        $validator      =   Validator::make($request->all(), [
            
            
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required','numeric'],
          
         ]);
        
        if ($validator->fails()) {

                return response()->json(['success' =>0,"error"=>1,'message'=>$validator->errors()], 200);
        }


                $user = User::create([
                            'name'          =>  $request->name,
                            'email'         =>  $request->email,
                            'phone'          =>  $request->phone,
                            'password'      =>  Hash::make($request->password)
                ]);

        
        
       

    return response()->json(['success'=>1,"error"=>0,'message'=>'Registered successfully!!'], 200);
    }
    
    

        public function login(Request $request)
        {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password
            ];
           

            if (Auth::attempt($credentials)) {
                          
                return response()->json(['success'=>1,"error"=>0,'message'=>'Logged in successfully!!',"user"=>auth()->user()], 200);
            } else {
                return response()->json(['success'=>0,"error"=>1,'message'=>'UnAuthorised'], 200);
            }


        }
   

          

            public function addToCart(Request $request ){

              $validator = Validator::make($request->all(), [

                  'id'       =>  'required',
                  'quantity' =>  'required',
                  'name'     =>  'required',
                  'price'    =>  'required',
               ]);

              if ($validator->fails()) {
                 
              return response()->json(['success' =>0,"error"=>1,'message'=>$validator->errors()], 200);
              }

                $cart =   Cart::add([
                'id'=>$request->product_id,
                'name'=>$request->name,
                'price'=>$request->price,
                'quantity'=>$request->quantity,
               ]);

              if($cart){
                  
                  
                  return response()->json(['success' =>1,"error"=>0,'message'=>'Item Added Successfully to Your Cart.'], 200);
                
              }else{
                  
                  return response()->json(['success' =>0,"error"=>1,'message'=>'Oops something went wrong please try again later!'], 200);
                  
              }
           }






}
