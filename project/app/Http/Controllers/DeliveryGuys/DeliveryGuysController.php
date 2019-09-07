<?php

namespace App\Http\Controllers\DeliveryGuys;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\DeliveryGuys;
use Illuminate\Support\Facades\Validator;
use Notification;
use Session;
use Alert;


class DeliveryGuysController extends Controller
{
     public function __construct(){
       
      $this->middleware('auth:deliveryguy');
    }


    public function index(){  
       $data['page_title']='DeliveryGuys Dashboard';
       return view ('deliveryguys.index',$data);
       
    }
}
