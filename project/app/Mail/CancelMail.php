<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Order;

class CancelMail extends Mailable
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
         return $this->to($this->$order->email)
                    ->cc('ravikant.webcoir@gmail.com')
                    ->subject('Order cancel From wcfood ')
                    ->view('emails.cancel.cancelorder');


        
    }
}
