<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

Class UserController extends Controller
{
    public function signupAction()
    {
        return view('user.signup');
    }

    public function signinAction()
    {
        return view('user.signin');
    }

    Public function signupPostAction(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'max:50'],
            'lastname' => ['required', 'max:50'],
            'email' => ['required', 'email', 'unique:app_users'],
            'password' => ['required', 'min:8']
        ]);

        $firstname = $request->input('firstname');

        $lastname = $request->input('lastname');

        $email = $request->input('email');

        $password = $request->input('password');

        $user = new User;

        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->password = Hash::make($password);

        $saved = $user->save();

        if ($saved) {
            return redirect()->route('signin')->with('success', 'Votre compte a bien été créé');
        } else {
            return redirect()->route('signup')->with('failed', "Votre compte n'a pas été créé");
        }
    }
}
