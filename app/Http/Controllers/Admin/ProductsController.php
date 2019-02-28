<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $products = Product::where('code', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('slug', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('category_id', 'LIKE', "%$keyword%")
                ->orWhere('status_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $products = Product::latest()->paginate($perPage);
        }

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $statuses = Status::orderBy('name', 'asc')->pluck('name', 'id');
        $categories = Category::orderBy('name', 'asc')->pluck('name', 'id');


        return view('admin.products.create', compact('statuses', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $rules = $this->validate($request, [
			'code' => 'required|unique:products,code',
			'name' => 'required|max:255',
			'slug' => 'required|max:255|unique:products,slug',
			'content' => 'required',
			'price' => 'required',
			'category_id' => 'required|integer',
			'status_id' => 'required|integer'
		]);
        $requestData = $request->all();

        $product = Product::create($requestData);

        //IMAGE
        if ($request->file('image')){
            $path = Storage::disk('public')->put('image', $request->file('image'));
            $product->fill(['image' => asset($path)])->save();
        }

        //TAGS
        //$post->tags()->attach($request->get('tags'));
        
        //Product::create($requestData);

        return redirect('admin/products')->with('flash_message', 'Product Agregado con Exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show(Product $product)
    {
        //$product = Product::findOrFail($id);

        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit(Product $product)
    {
        //$product = Product::findOrFail($id);
        $statuses = Status::orderBy('name', 'asc')->pluck('name', 'id');
        $categories = Category::orderBy('name', 'asc')->pluck('name', 'id');

        return view('admin.products.edit', compact('product','statuses', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Product $product)
    {
         $this->validate($request, [
			'name' => 'required|max:255',
			'content' => 'required',
			'price' => 'required',
			'category_id' => 'required|integer',
			'status_id' => 'required|integer'
		]);


        $requestData = $request->all();
        
        //$product = Product::findOrFail($id);
        $product->update($requestData);

        //IMAGE
        if ($request->file('image')){
            $path = Storage::disk('public')->put('image', $request->file('image'));
            $product->fill(['image' => asset($path)])->save();
        }

        return redirect('admin/products')->with('flash_message', 'Producto Actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('admin/products')->with('flash_message', 'Product deleted!');
    }
}
