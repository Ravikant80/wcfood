<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Order;
use DB;
use PDF;


class OrderPlaced extends Mailable
{
    use Queueable, SerializesModels;
    public $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order =$order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    
        
    // pdf designing view orderpdf

    $pdf = PDF::loadView('emails.order.orderpdf',['order'=>$this->order]);

    $this->to($this->order->billing_email,$this->order->user_name)
    ->cc('ravikant.webcoir@gmail.com')
    ->subject('New Order From wcfood ')
    ->view('emails.order.placed')
    ->attachData($pdf->output(), "orderpdf.pdf");





    }

}
