<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Subscribe;

class SubscribeMail extends Mailable
{
    use Queueable, SerializesModels;
    public $subscribes;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    //Subscribe model name
    public function __construct(Subscribe $subscribes)
    {
        $this->subscribes =$subscribes;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->subscribes->email)
                    ->cc('ravikant.webcoir@gmail.com')
                    ->subject('New Subscribe to wcfood ')
                    ->view('emails.subscribe.subscribe');
    }
}
