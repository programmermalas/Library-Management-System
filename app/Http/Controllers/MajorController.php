<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // get data major
        $majors = 'App\Major'::all();

        return view('pages.major.index', compact('majors'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.major.create');

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
            'name'     => 'required|unique:majors',
        ]);

        // request data major
        $data = [
            'name'  => $request->name,
        ];

        // create major
        'App\Major'::create($data);

        return redirect()->route('major')->with('success', 'Added Major Success.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        // find major
        $major = 'App\Major'::findOrFail($id);

        return view('pages.major.edit', compact('major'));

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

        // find the major
        $major = 'App\Major'::findOrFail($id);

        // validate
        $request->validate([
            'name'      => 'required|unique:majors,name,'.$major->name.',name',
        ]);
        
        // update data major
        $data = [
            'name'  => $request->name,
        ];

        // updated major
        $major->update($data);

        return redirect()->route('major')->with('success', 'Updated Major Success.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // find major
        $major = 'App\Major'::findOrFail($id);

        // delete major
        $major->delete();

        return redirect()->back()->with('danger', 'Major has been deleted.');

    }
}
