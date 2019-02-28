<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{

    public function payment($no_order)
    {

        $order = DB::table('orders')->where('id', $no_order)
            ->where('user_id', auth()->user()->id)
            ->get('id');

        return view('admin.orders.payment', compact('order'));
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        $roles = auth()->user()->roles;
        foreach ($roles as $role)
        {
            $role1 = $role->id;
        }

        if ($role1 == 1){

            $orders = Order::latest()->paginate($perPage);
        }else
        {
            if (!empty($keyword)) {
                $orders = Order::where('no_order', 'LIKE', "%$keyword%")
                    ->Where('user_id', auth()->user()->id)
                    ->orWhere('subtotal', 'LIKE', "%$keyword%")
                    ->latest()->paginate($perPage);
            } else {
                $orders = Order::Where('user_id', auth()->user()->id)->latest()->paginate($perPage);
            }
        }


        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.orders.create');
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
			'no_order' => 'required|unique:orders,no_order',
			'user_id' => 'required|integer',
			'status_id' => 'required|integer',
			'subtotal' => 'required|decimal',
			'tax' => 'required|decimal',
			'total' => 'required|decimal'
		]);
        $requestData = $request->all();
        
        Order::create($requestData);

        return redirect('orders')->with('flash_message', 'Order added!');
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
        $order = Order::findOrFail($id);

        return view('admin.orders.show', compact('order'));
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
        $order = Order::findOrFail($id);

        return view('admin.orders.edit', compact('order'));
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
			'no_order' => 'required|unique:orders,no_order',
			'user_id' => 'required|integer',
			'status_id' => 'required|integer',
			'subtotal' => 'required|decimal',
			'tax' => 'required|decimal',
			'total' => 'required|decimal'
		]);
        $requestData = $request->all();
        
        $order = Order::findOrFail($id);
        $order->update($requestData);

        return redirect('orders')->with('flash_message', 'Order updated!');
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
        Order::destroy($id);

        return redirect('orders')->with('flash_message', 'Order deleted!');
    }
}
