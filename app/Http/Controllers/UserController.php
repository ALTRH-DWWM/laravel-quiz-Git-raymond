
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

use App\Utils\UserSession;

class UserController extends Controller
{
    public function signupAction()
    {
        if (!UserSession::isConnected()) {
            return view('user.signup');
        } else {
            return redirect()->route('home');
        }
    }

    public function signupPostAction(Request $request)
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

    public function signinAction()
    {
        if (!UserSession::isConnected()) {
            return view('user.signin');
        } else {
            return redirect()->route('home');
        }
    }

    public function signinPostAction(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            UserSession::connect($user);

            return redirect()->route('home');
        } else {
            return redirect()->route('signin')->with('failed', 'Vos identiants sont erronés');
        }
    }

    public function profileAction()
    {
        if (UserSession::isConnected()) {
            $user = UserSession::getUser();

            return view('user.profile', compact(['user']));
        } else {
            return redirect()->route('signin');
        }
    }

    public function signoutAction()
    {
        UserSession::disconnect();

        return redirect()->route('home');
    }
}
