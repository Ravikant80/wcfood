<?php

namespace App\Http\Controllers\DeliveryGuys;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Admin;
use App\DeliveryGuys;
use Illuminate\Http\Request;
use Redirect;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
        protected $redirectTo = 'deliveryguys-dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:deliveryguy');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


       protected function registerForm()
    {
        return view('deliveryguys/register');
         // return view('admin.admin_dashboard.adminreg');
    }
    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    
    
    protected function create(Request $request)
    {

        $deliveryguy = new DeliveryGuys;
        $deliveryguy->address= $request->address;
        $deliveryguy->name= $request->name;
        $deliveryguy->phone= $request->phone;
        $deliveryguy->email= $request->email;
        // $deliveryguy->password= $request->password;
        $deliveryguy->password= Hash::make($request->password);
        $deliveryguy->remember_token= $request->_token;
        $deliveryguy->save();
        return Redirect::back()->with('message','Successfully register');
      
    }
   

    
  
}
