<?php

namespace App\Http\Controllers\Web;

use App\Mail\mailOrderShipped;
use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{


    public function processOrder()
    {
        $user = Auth::user();
        $orderShipped = $user->person();
        //dd($orderShipped);

        $this->saveOrder(\Session::get('cart'));

        \Session::forget('cart');


        Mail::to($user->email)
            ->send(new mailOrderShipped($orderShipped));

        return \Redirect::route('home')
            ->with('flash_message', 'Orden procesada con exito');
    }



    private function saveOrder($cart)
    {
        $cart = \Session::get('cart');
        $subtotal = 0;
        foreach($cart as $item)
        {
            $subtotal += $item->price * $item->quantity;
        }

        $tax = (($subtotal*35)/100);
        $subtotal_general = $subtotal - $tax;
        $total = $subtotal_general + $tax;


        $order = Order::create([
            'no_order' => $this->generarCodigo(10),
            'subtotal' => $subtotal_general,
            'tax' => $tax,
            'total' => $total,
            'user_id' => \Auth::user()->id,
            'status_id' => '3',
        ]);

        foreach($cart as $item)
        {
            $this->saveOrderItem($item, $order->id);
        }
    }


    private function generarCodigo($longitud) {
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
        return $key;
    }

    private function saveOrderItem($item, $order_id)
    {
        OrderItem::create([
            'quantity' => $item->quantity,
            'price' => $item->price,
            'product_id' => $item->id,
            'order_id' => $order_id
        ]);
    }
}
