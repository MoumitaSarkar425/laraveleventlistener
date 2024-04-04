<?php

namespace App\Listeners;

use App\Events\EventOrderUpdate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Order;

class ListenerOrderUpdate
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
     * @param  \App\Events\EventOrderUpdate  $event
     * @return void
     */
    public function handle(EventOrderUpdate $event)
    {
        //

        $id = $event->id;
        $request = $event->request;

        $order = Order::find($id);

        //update
        $order->update(request()->all());
        $order->save();

    }
}
