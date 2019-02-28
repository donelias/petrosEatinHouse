<?php

namespace App\Http\Controllers;

use App\Category;
use App\Mail\mailContact;
use App\Mail\mailSuscription;
use App\Message;
use App\Product;
use App\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    //

    //Page Index
    public function index()
    {
        $perPage = 0;
        $products = $this->product($perPage);
        $categories = ['1', '2'];
        return view('store.index', compact('products', 'categories'));
    }

    //Page Menu
    public function menu(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 50;
        $categories = Category::get();
        if (!empty($keyword)) {
            $products = Product::where('name', 'LIKE', "%$keyword%")
                ->orWhere('slug', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $products = Product::latest()->paginate($perPage);
            $products_3 = $this->product(3);
            $products_3_3 = Product::where('outstanding', 'ENABLE')->latest()->paginate(3);
        }


        return view('store.menu', compact('products', 'categories', 'products_3', 'products_3_3'));
    }

    //Menu Category
    public function menuCategory($slug)
    {
        $perPage = 21;
        $categories = Category::get();
        $category = Category::where('slug', $slug)->first();
        $category_id = $category->id;
        $products = Product::where('category_id', $category_id)->paginate($perPage);


        return view('store.menu', compact('products', 'categories'));
    }

    //Page Category
    public function offer(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 50;
        $categories = Category::get();
        if (!empty($keyword)) {
            $products = Product::where('name', 'LIKE', "%$keyword%")
                ->orWhere('slug', 'LIKE', "%$keyword%")
                ->where('offer', 'ENABLE')
                ->latest()->paginate($perPage);
        } else {
            $products = Product::where('offer', 'ENABLE')->latest()->paginate($perPage);
            $products_3 = Product::where('offer', 'ENABLE')->where('outstanding', 'ENABLE')->paginate(3);
            $products_3_3 = Product::where('offer', 'ENABLE')->where('outstanding', 'ENABLE')->latest()->paginate(3);
        }

        return view('store.menu', compact('products', 'categories', 'products_3', 'products_3_3'));
    }

    //Page Contact
    public function contact()
    {
        return view('store.contact');
    }

    //Page Contact
    public function about()
    {
        return view('store.about');
    }

    //Message contact
    public function message(Request $request)
    {
        $message = $this->validate($request, [
            'name' => 'required|max:255',
            'telephone' => 'required|max:15',
            'email' => 'required|max:255',
            'message' => 'required'
        ]);

        $requestData = $request->all();
        $message = $request;
        
        Message::create($requestData);

        Mail::to($message->email, $message->name, $message->telephone)
            ->cc('clientes@petroseatinghouse.com')
            ->send(new mailContact($message));

        return redirect('/contactos')->with('flash_message', 'Mensaje recibio con exito!');
    }



    //Subscription
    public function subscription(Request $request)
    {
         $this->validate($request, [
            'email' => 'required|max:255|unique:subscriptions,email'
        ]);
        $requestData = $request->all();
        $subscription = $request;

        Subscription::create($requestData);

        Mail::to($subscription->email)
            ->cc('clientes@petroseatinghouse.com')
            ->send(new mailSuscription($requestData));

        return redirect('/')->with('flash_message', 'Correo electrónico subscrito con exito!');

    }

    //Show Product
    public function showProduct($slug)
    {

        $product = Product::where('slug', $slug)->first();
        $categories = Category::get();

        return view('store.showProduct', compact('product', 'categories'));
    }

    private function product($perPage)
    {
        $product = Product::skip(30)->take(3)->get();
        return $product;
    }

}
