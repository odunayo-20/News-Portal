<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }


    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        // validate incoming data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        // attempt authentication (handles hashing)
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }

        // authentication failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }


    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }


    public function register(Request $request)
    {
        // validate incoming data
        // dd($request->all());
//         $validated = $request->validate([
//             'username' => 'required|string|max:255',
//             'name' => 'required|string|max:255',
//             'email' => 'required|email|unique:users,email',
//             'password' => 'required|string|min:6|confirmed',
//             'password_confirmation' => 'required|string|min:6',
//         ]);

// dd($validated);

        // create new user
        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // log the user in
        auth()->login($user);

        return redirect('dashboard');

    }


}

