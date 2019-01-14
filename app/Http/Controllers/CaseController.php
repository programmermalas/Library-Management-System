<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // get data book case
        $cases  = 'App\BookCase'::all();

        return view('pages.case.index', compact('cases'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.case.create');

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
            'name'  => 'required|unique:book_cases',
        ]);

        // data
        $data   = [
            'name'  => $request->name,
        ];

        // create
        'App\BookCase'::create($data);

        return redirect()->route('case')->with('Success', 'Added Book Cases Success.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        // find
        $case   = 'App\BookCase'::findOrFail($id);

        return view('pages.case.edit', compact('case'));

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
        
        // find
        $case   = 'App\BookCase'::findOrFail($id);

        // validate
        $request->validate([
            'name'  => 'required|unique:book_cases,name,'.$case->name.'name',
        ]);

        // data
        $data   = [
            'name'  => $request->name,
        ];

        // update
        $case->update($data);

        return redirect()->route('case')->with('success', 'Updated Book Case Success.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // find
        $case   = 'App\BookCase'::findOrFail($id);

        // delete
        $case->delete();

        return redirect()->route('case')->with('danger', 'Deleted Book Case Success.');

    }
}
