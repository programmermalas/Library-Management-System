<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // get the book
        $books  = 'App\Book'::all();

        return view('pages.book.index', compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        // get the author
        $authors    = 'App\Author'::all();

        // get the publisher
        $publishers = 'App\Publisher'::all();

        // get the category
        $categories = 'App\Category'::all();

        // get the book case
        $cases      = 'App\BookCase'::all();

        return view('pages.book.create', compact('authors', 'publishers', 'categories', 'cases'));

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
            'name'  => 'required|unique:books',
        ]);

        // data
        $data   = [
            'name'          => $request->name,
            'id_category'   => $request->category,
            'id_author'     => $request->author,
            'id_publisher'  => $request->publisher,
            'id_book_case'  => $request->case,
        ];

        // create
        'App\Book'::create($data);

        return redirect()->route('book')->with('success', 'Added Books Success.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        // find the book
        $book   = 'App\Book'::findOrFail($id);

        // get the author
        $authors    = 'App\Author'::all();

        // get the publisher
        $publishers = 'App\Publisher'::all();

        // get the category
        $categories = 'App\Category'::all();

        // get the book case
        $cases      = 'App\BookCase'::all();

        return view('pages.book.edit', compact('book', 'authors', 'publishers', 'categories', 'cases'));

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
        
        // find the book
        $book   = 'App\Book'::findOrFail($id);

        // validate
        $request->validate([
            'name'  => 'required|unique:books,name,'.$book->name.',name',
        ]);

        // data
        $data   = [
            'name'          => $request->name,
            'id_category'   => $request->category,
            'id_author'     => $request->author,
            'id_publisher'  => $request->publisher,
            'id_book_case'  => $request->case,
        ];

        // update
        $book->update($data);

        return redirect()->route('book')->with('success', 'Updated Book Success.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // find the book
        $book   = 'App\Book'::findOrFail($id);

        // delete
        $book->delete();

        return redirect()->route('book')->with('danger', 'Deleted Book Success.');

    }
}
