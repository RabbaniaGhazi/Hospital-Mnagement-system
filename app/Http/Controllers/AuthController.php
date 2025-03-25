<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController 
{
    public function showLoginForm()
    {
        return view('auth.login'); 
        
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->with('fail', 'Email not registered');
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('dashboard')->with('success', 'Logged in successfully!');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function register_view()
    {
        return view('auth.register');
    }
     public function register(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|unique:users|max:255',
                'password' => 'required|string|confirmed|min:6',
                'role' => 'required|string|in:staff,doctor',
            ]);
            User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password')),
                'role' => $request->get('role'),
            ]);
            if (Auth::attempt($request->only ('email' ,'password') )) ;{
                return redirect()->route('users.index')->with('success', 'Logged in successfully!');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
            
        }
        public function dashboard()
        {
            if (Auth::check()) {
                return redirect()->route('users.index');
            }
            return redirect()->route('login')->with('error', 'You must be logged in to access the dashboard.');
        }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login')->with('success', 'Logged out successfully!');
    }
   
}
