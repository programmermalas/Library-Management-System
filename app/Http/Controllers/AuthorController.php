<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // find the author
        $authors    = 'App\Author'::all();

        return view('pages.author.index', compact('authors'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.author.create');

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
            'name'  => 'required|unique:authors',
        ]);

        // data
        $data   = [
            'name'  => $request->name,
        ];

        // create
        'App\Author'::create($data);

        return redirect()->route('author')->with('success', 'Added Author Success.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        // find the author
        $author = 'App\Author'::findOrFail($id);

        return view('pages.author.edit', compact('author'));

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
        
        // find the author
        $author = 'App\Author'::findOrFail($id);

        // validate
        $request->validate([
            'name'  => 'required|unique:authors,name,'.$author->name.',name',
        ]);

        // data
        $data   = [
            'name'  => $request->name,
        ];

        // update
        $author->update($data);

        return redirect()->route('author')->with('success', 'Updated Author Success.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // find the author
        $author = 'App\Author'::findOrFail($id);

        // delete
        $author->delete();

        return redirect()->route('author')->with('danger', 'Deleted Author Sucess.');

    }
}
