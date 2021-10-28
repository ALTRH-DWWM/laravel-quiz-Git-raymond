<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function signupAction()
    {
        return view('user.signup');
    }

    public function signinAction()
    {
        return view('user.signin');
    }
}
