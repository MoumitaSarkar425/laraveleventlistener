<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Events\EventOrderUpdate;
use App\Events\EventSendMail;

class OrderController extends Controller
{
	/**
     * Instantiate a new OrderController instance.
     */
    public function __construct(){
        //$this->middleware('guest');
    }


    /**
     * Display a motivator product list.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        
        $order = Order::all();
    	return view('admin.order.index')->with('orders', $order);
    }


    /**
     * Display a motivator product create.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $order = Order::find($id);
        return view('admin.order.create')->with('order', $order);
    }

    /**
     * Insert a motivator product to database.
     *
     * @return \Illuminate\Http\Response
     */

    public function update($id,Request $request, Order $order)
    {
        // validation

        $this->validate(request(),[
            'orderStatus' => 'required',
        ]);

        $order = $order->find($id);


        // Trigger the event update order
        event(new EventOrderUpdate($id,$request));



        // Trigger the event send mail
        event(new EventSendMail($order));

        
        //return "Order placed successfully!";

        return redirect()->route('order');

    }
}
