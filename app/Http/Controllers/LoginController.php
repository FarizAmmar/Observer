<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //View login
    public function show()
    {
        // return view('page.login', [
        //     'title' => 'Login'
        // ]);

        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('page.login', [
                'title' => 'Login'
            ]);
        }
    }

    public function authenticate(Request $request)
    {
        // Old Input
        $request->flashOnly(['username']);

        // Validation
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::Attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('loginFailed', 'Please contact your administrator if you already have an account!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
