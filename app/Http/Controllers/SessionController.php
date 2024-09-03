<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        //validate
        $validated =  request()->validate([
            'email' => ["required", 'email'],
            'password' => ["required"],
        ]);

        //attempt to login user
      if(!Auth::attempt($validated)) {
        throw ValidationException::withMessages([
            'email'=> "error"
        ]);
      }
        //regenerate the session token
        request()->session()->regenerate();
        //redirect
        return to_route("flights.index");
    }

    public function destroy() {
       Auth::logout();

       return to_route("index");
    }
}
