<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView()
    {
        if (Auth::user()) {
            if (Auth::user()->isAdmin()) {
                return redirect(route('admin.dashboard'));
            }
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $authUser = Auth::user();

            if ($authUser->isAdmin()) {
                return redirect(route('admin.dashboard'))->with('success', 'login successfully');
            } else {
                Auth::logout();
                return back()->with('error', 'Credentials do not Match');
            }
        } else {
            Auth::logout();
            return back()->with('error', 'Record not found');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect(route('login.view'));
    }
}
