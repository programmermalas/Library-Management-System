<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    // index login
    public function index() {
        return view('login');
    }

    // do login
    public function doLogin(Request $request) {

        // validate
        $this->validate($request, [
            'email'     => 'email|exists:users',
            'password'  => 'required',
        ]);
        
        // request attempts
        $attempts = [
            'email'     => $request->email,
            'password'  => $request->password,
        ];

        // auth user
        if (!auth()->attempt($attempts)) {
            return redirect()->back()
                ->withInput()
                ->withErrors([
                    'password' => 'Incorrect Password',
                ]);
        }

        return redirect()->route('dashboard');

    }

    // do logout
    public function doLogout() {

        auth()->logout();

        return redirect()->route('login');

    }
}
