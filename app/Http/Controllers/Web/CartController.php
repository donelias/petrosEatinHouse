<?php

namespace App\Http\Controllers\Web;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function __construct()
    {
        if(!\Session::has('cart')) \Session::put('cart', array());
    }

    //orders
    public function orders()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->paginate(10);

        return view('admin.solicitud.orders', compact('orders'));
    }


    // Total
    private function total()
    {
        $cart = \Session::get('cart');
        $total = 0;
        foreach($cart as $item){
            $total += $item->price * $item->quantity;
        }

        return $total;
    }


    // Show cart
    public function show()
    {
        $cart = \Session::get('cart');
        $total = $this->total();
        return view('store.cart', compact('cart', 'total'));

    }

    // Add item
    public function add($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $cart = $product;
        $cart = \Session::get('cart');
        $product->quantity = 1;
        $cart[$product->slug] = $product;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }

    // Delete item
    public function delete($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $cart = \Session::get('cart');
        unset($cart[$product->slug]);
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }

    // Update item
    public function update($slug, $quantity)
    {
        $product = Product::where('slug', $slug)->first();
        $cart = \Session::get('cart');
        $cart[$product->slug]->quantity = $quantity;
        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }

    // Trash cart
    public function trash()
    {
        \Session::forget('cart');

        return redirect()->route('cart-show');
    }

    // Detalle del pedido
    public function orderDetail()
    {
        if(count(\Session::get('cart')) <= 0) return redirect()->route('index');
        $cart = \Session::get('cart');
        $total = $this->total();

        return view('store.order-detail', compact('cart', 'total'));
    }
}
