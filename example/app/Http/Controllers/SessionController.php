<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        return Auth::attempt(request(['email', 'password']))
            ? redirect()->intended('/jobs')
            : back()->withErrors([
                'message' => 'Please check your credentials and try again',
            ])->onlyInput('email');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
