<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        // validate the user
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        // attempt to log in
        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'credentials' => "Terdapat kesalahan pada email/password"
            ]);
        }
        // regenerate the session token
        request()->session()->regenerate();
        // redirect
        return redirect('/shipments');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/login');
    }
}
