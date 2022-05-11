<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class customerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    	$this->middleware('guest:customer');
    }


    public function login(){
        return view('front-end.login');
    }


    public function customerLogin(Request $request)
    {
        /*
            Attempt to login
        */
        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // if login success;
            return redirect('/');
        } else {
            // if unsuccessful, then return back to the login form with data;
            return redirect()->back()->withInput($request->only('email'));
        }

    }

}
