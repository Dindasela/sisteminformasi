<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $cek = User::where('email', $request->email)->first();
        if (!$cek) {
            return redirect()->back()->withErrors([
                'email' => 'Email atau password salah.',
            ])->withInput($request->except('password'));
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('dashboard');
            } elseif (Auth::user()->role == 'user') {
                User::where('id', Auth::user()->id)->update(['is_active' => 1]);
                return redirect()->route('home');
            }
        }

        return redirect()->back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput($request->except('password'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login-admin');
    }

    public function logoutUser()
    {
        User::where('id', Auth::user()->id)->update(['is_active' => 2]);
        Auth::logout();
        return redirect('/login-user');
    }
}