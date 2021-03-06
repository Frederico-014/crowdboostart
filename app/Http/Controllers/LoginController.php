<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login (Request $request)
    {
        if ($request->isMethod('post'))
        {
            $this->validate($request,[
                'email'=>'required|email',
                'password'=>'required'
            ]);

            $credentials=$request->only('email','password');


            if (Auth::attempt($credentials,$request->has('remember')))
            {

                Auth::user()->status='online';
                Auth::user()->save();
                if (Auth::user()->id == 2) {
                    return redirect('/show/3');
                }else {
                    return redirect('/');
                }
            }
            else
            {
                return back()->withInput($request->only('email'))->with(['message'=>' Login Fail']);
            }
        }
        return view('auth.login');
    }
    public function logout()
    {
        Auth::user()->status='offline';
        Auth::user()->save();
        Auth::logout();

        return redirect('/');
    }
}
