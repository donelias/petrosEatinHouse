<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Person;
use Illuminate\Http\Request;

class PeopleController extends Controller
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
            $people = Person::where('identity', 'LIKE', "%$keyword%")
                ->orWhere('name', 'LIKE', "%$keyword%")
                ->orWhere('last_name', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('cellphone', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $people = Person::latest()->paginate($perPage);
        }

        return view('admin.people.index', compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.people.create');
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
			'identity' => 'required|unique:people,identity',
			'name' => 'required|max:255',
			'last_name' => 'required|max:255',
			'address' => 'required',
			'phone' => 'required',
			'cellphone' => 'required',
			'user_id' => 'required|integer'
		]);
        $requestData = $request->all();
        
        Person::create($requestData);

        return redirect('admin/people')->with('flash_message', 'Person added!');
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
        $person = Person::findOrFail($id);

        return view('admin.people.show', compact('person'));
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
        $person = Person::findOrFail($id);

        return view('admin.people.edit', compact('person'));
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
			'identity' => 'required|unique:people,identity',
			'name' => 'required|max:255',
			'last_name' => 'required|max:255',
			'address' => 'required',
			'phone' => 'required',
			'cellphone' => 'required',
			'user_id' => 'required|integer'
		]);
        $requestData = $request->all();
        
        $person = Person::findOrFail($id);
        $person->update($requestData);

        return redirect('admin/people')->with('flash_message', 'Person updated!');
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
        Person::destroy($id);

        return redirect('admin/people')->with('flash_message', 'Person deleted!');
    }
}
