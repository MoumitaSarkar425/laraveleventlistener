<?php

namespace App\Listeners;

use App\Events\EventSendMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\OrderConfirmation;
use Illuminate\Support\Facades\Mail;

class ListenerSendMail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\EventSendMail  $event
     * @return void
     */
    public function handle(EventSendMail $event)
    {
        try {
            $order = $event->order;


            // Send order confirmation email
            $firstname = $order->customerName;
            $orderId =$order->orderId;
            $email = $order->customerEmail;
            Mail::to($email)->send(new OrderConfirmation($order))->delay(now()->addSeconds(5));
        } catch(\Exception $e){
            //
        }
        
    }
}
