<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        // return view('backend.auth.login');
        return view('master.master');


    }
}
