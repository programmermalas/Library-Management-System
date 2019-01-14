<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // get data category
        $categories = 'App\Category'::all();

        return view('pages.category.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.category.create');

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
            'name'  => 'required|unique:categories',
        ]);

        // data
        $data   = [
            'name'  => $request->name,
        ];

        // create
        'App\Category'::create($data);

        return redirect()->route('category')->with('success', 'Added Category Success.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        // find category
        $category   = 'App\Category'::findOrFail($id);

        return view('pages.category.edit', compact('category'));

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
        
        // find category
        $category   = 'App\Category'::findOrFail($id);

        // validate
        $request->validate([
            'name'  => 'required|unique:categories,name,'.$category->name.',name',
        ]);

        // data
        $data   = [
            'name'  => $request->name,
        ];

        // update
        $category->update($data);

        return redirect()->route('category')->with('success', 'Updated Category Success.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // find category
        $category   = 'App\Category'::findOrFail($id);

        // delete
        $category->delete();

        return redirect()->route('category')->with('danger', 'Deleted Category Success.');
        
    }
}
