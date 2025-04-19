<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PasswordResetController extends Controller
{
    public function showResetForm()
    {
        return view('auth.reset_password');
    }

    public function reset(Request $request)
    {
        $request->validate([
            'password' => 'required|string|confirmed|min:6',
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->password);
        $user->first_login = false; 
        $user->save();

        return redirect('dashboard')->with('success', 'Password reset successfully! You are now logged in.');
    }
}
