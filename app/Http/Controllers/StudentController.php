<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // get all student
        $students   = 'App\Student'::all();

        return view('pages.student.index', compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // get all major
        $majors = 'App\Major'::all();

        return view('pages.student.create', compact('majors'));

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
            'id_major'  => 'required',
            'nim'       => 'required|unique:students',
            'name'      => 'required',    
            'phone'     => 'required',
            'address'   => 'required',
            'email'     => 'email|unique:students',
            'nik'       => 'required|unique:students',
        ]);

        // data student
        $data = [
            'id_major'  => $request->id_major,
            'nim'       => $request->nim,
            'name'      => $request->name,
            'phone'     => $request->phone,
            'address'   => $request->address,
            'email'     => $request->email,
            'nik'       => $request->nik,
        ];

        // create student
        'App\Student'::create($data);

        return redirect()->route('student')->with('success', 'Added Student Success.');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        // find student
        $student = 'App\Student'::where('nim', $id)->firstOrFail();

        // get all major
        $majors = 'App\Major'::all();

        return view('pages.student.edit', compact('student', 'majors'));

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

        // find the student
        $student = 'App\Student'::where('nim', $id)->firstOrFail();

        // validate
        $request->validate([
            'nim'       => 'required|unique:students,nim,'.$student->nim.',nim',
            'id_major'  => 'required',
            'name'      => 'required',
            'phone'     => 'required',
            'address'   => 'required',
            'email'     => 'required|email|unique:students,email,'.$student->email.',email',
            'nik'       => 'required|unique:students,nik,'.$student->nik.',nik',
        ]);

        // data student
        $data = [
            'nim'       => $request->nim,
            'id_major'  => $request->id_major,
            'name'      => $request->name,
            'phone'     => $request->phone,
            'address'   => $request->address,
            'email'     => $request->email,
            'nik'       => $request->nik,
        ];

        // create student
        $student->update($data);

        return redirect()->route('student')->with('success', 'Updated Student Success.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // find the id student
        $student = 'App\Student'::where('nim',$id)->firstOrFail();

        $student->delete();

        return redirect()->back()->with('danger', 'Student has been deleted.');

    }
}
