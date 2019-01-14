<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $publishers = 'App\Publisher'::all();
        
        return view('pages.publisher.index', compact('publishers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.publisher.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validate
        $request->validate([
            'name'      => 'required|unique:publishers',
            'address'   => 'required',
            'phone'     => 'required',
        ]);

        // data publisher
        $data   = [
            'name'      =>  $request->name,
            'address'   =>  $request->address,
            'phone'     =>  $request->phone
        ];

        // create publiserh
        'App\Publisher'::create($data);

        return redirect()->route('publisher')->with('success', 'Added publisher success.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        // find the publisher
        $publisher = 'App\Publisher'::findOrFail($id);

        return view('pages.publisher.edit', compact('publisher'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        // find the publisher
        $publisher = 'App\Publisher'::findOrFail($id);

        // validate
        $request->validate([
            'name'      =>  'Required|unique:publishers,name,'.$publisher->name.',name',
            'address'   =>  'Required',
            'phone'     =>  'Required|unique:publishers,phone,'.$publisher->phone.',phone',
        ]);

        // update data publisher
        $data = [
            'name'      =>  $request->name,
            'address'   =>  $request->address,
            'phone'     =>  $request->phone,
        ];

        // updated publisher
        $publisher->update($data);

        return redirect()->route('publisher')->with('success', 'Updated Publisher Success.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // find the publisher
        $publisher = 'App\Publisher'::findOrFail($id);

        $publisher->delete();

        return redirect()->route('publisher')->with('danger', 'Deleted Publisher Success.');

    }
}
