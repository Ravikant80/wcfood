<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
//use Tzsk\Payu\Fragment\Payable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Order extends Model
{
	// use Cancellable;
    


	
    //use Payable;
    protected $fillable = ['user_id','user_name','billing_email','billing_address','billing_city','billing_state',
    'billing_pincode','billing_country','billing_phone','billing_discount','billing_discount_code','billing_subtotal',
    'billing_tax','billing_total','payment_id','transaction_id','delivery_fee','order_status'
     ];

}
