<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\OrderItem;
use Illuminate\Http\Request;

class OrderItemsController extends Controller
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
            $orderitems = OrderItem::where('order_id', 'LIKE', "%$keyword%")
                ->orWhere('product_id', 'LIKE', "%$keyword%")
                ->orWhere('quantity', 'LIKE', "%$keyword%")
                ->orWhere('price', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $orderitems = OrderItem::latest()->paginate($perPage);
        }

        return view('admin.order-items.index', compact('orderitems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.order-items.create');
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
        $this->validate($request, [
			'order_id' => 'required|integer',
			'product_id' => 'required|integer',
			'quantity' => 'required|decimal',
			'price' => 'required'
		]);
        $requestData = $request->all();
        
        OrderItem::create($requestData);

        return redirect('admin/order-items')->with('flash_message', 'OrderItem added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $orderitem = OrderItem::findOrFail($id);

        return view('admin.order-items.show', compact('orderitem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $orderitem = OrderItem::findOrFail($id);

        return view('admin.order-items.edit', compact('orderitem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'order_id' => 'required|integer',
			'product_id' => 'required|integer',
			'quantity' => 'required|decimal',
			'price' => 'required'
		]);
        $requestData = $request->all();
        
        $orderitem = OrderItem::findOrFail($id);
        $orderitem->update($requestData);

        return redirect('admin/order-items')->with('flash_message', 'OrderItem updated!');
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
        OrderItem::destroy($id);

        return redirect('admin/order-items')->with('flash_message', 'OrderItem deleted!');
    }
}
