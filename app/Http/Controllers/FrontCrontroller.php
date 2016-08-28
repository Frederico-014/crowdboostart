<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontCrontroller extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function newUser()
    {
        return view('front.inscription');
    }
}
