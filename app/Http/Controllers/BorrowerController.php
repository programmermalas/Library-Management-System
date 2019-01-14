<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

class BorrowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // get the student
        $borrowers  = 'App\Borrower'::all();

        // get the book borrowed
        $borrowed   = $borrowers->where('status', 'borrowed');

        // get the book
        $books      = 'App\Book'::all();

        // get the student
        $students   = 'App\Student'::all();

        return view('pages.dashboard.index', compact('borrowers', 'borrowed', 'books', 'students'));  

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.dashboard.create');

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
            'name'  => 'required|exists:books,name',
            'nim'  => 'required|exists:students,nim',
        ]);

        // find the book
        $book       = 'App\Book'::where('name', $request->name)->firstOrFail();

        // find the student
        $student    = 'App\Student'::where('nim', $request->nim)->firstOrFail();

        // data
        $data   = [
            'id_user'   => Auth::user()->id,
            'id_book'   => $book->id,
            'id_student'=> $student->id,
            'return'    => Carbon::now()->addDay(7),
            'status'    => 'borrowed',
        ];

        // create
        'App\Borrower'::create($data);

        return redirect()->route('dashboard')->with('success', 'Added Borrower Success.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // find the borrower
        $borrower    = 'App\Borrower'::findOrFail($id);

        return view('pages.dashboard.show', compact('borrower'));

    }

    /**
     * Verification the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function verification($id)
    {
        
        // find the borrower
        $borrower   = 'App\Borrower'::findOrFail($id);

        // data
        $data   = [
            'status'    => 'returned',
            'return'    => Carbon::now(),
        ];

        // update
        $borrower->update($data);

        return redirect()->route('dashboard')->with('success', 'Verification Borrower Success.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        // find the borrower
        $borrower    = 'App\Borrower'::findOrFail($id);

        return view('pages.dashboard.edit', compact('borrower'));

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
        
        // find the borrower
        $borrower   = 'App\Borrower'::findOrFail($id);

        // validate
        $request->validate([
            'name'  => 'required|exists:books,name',
            'nim'   => 'required|exists:students,nim',
        ]);

        // find the book
        $book       = 'App\Book'::where('name', $request->name)->firstOrFail();

        // find the student
        $student    = 'App\Student'::where('nim', $request->nim)->firstOrFail();

        // data
        $data   = [
            'id_book'   => $book->id,
            'id_student'=> $student->id,
        ];

        // update
        $borrower->update($data);

        return redirect()->route('dashboard')->with('success', 'Updated Borrower Success.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // find the borrower
        $borrower   = 'App\Borrower'::findOrFail($id);

        // delete
        $borrower->delete();

        return redirect()->route('dashboard')->with('danger', 'Deleted Borrower Success.');

    }
}
