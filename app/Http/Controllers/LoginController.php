<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show() 
    {
        return view('login.show');
        
    }

    public function login(request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $credentials = ['email' => $email, 'password' => $password];

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('home.index')->with('success','the connection was established');
        }
        else{
            return back()->withErrors([
                'email' => 'the email or password is incorrect.'
            ])->onlyInput('email');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect()->route('login')->with('success','deconnection successful');

    }
}
