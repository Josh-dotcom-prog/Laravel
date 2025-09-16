<?php

namespace App\Http\Controllers;

use \App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use function Laravel\Prompts\confirm;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        // dd('Display registration form');
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //Validate
        $attributes = request()->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                'confirmed',
                Password::min(5)
            ],
        ]);

        //Create user
        $user = User::create($attributes);

        //Login user
        Auth::login($user);

        //redirect
        return redirect('/jobs');
    }
}
