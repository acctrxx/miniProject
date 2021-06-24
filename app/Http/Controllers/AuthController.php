<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function loginProccess(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ]);
        $data = $request->only('email', 'password');
        $isLogin = Auth::attempt($data);
        if ($isLogin) {
            return redirect()->intended('/dashboard');
        } else {
            return redirect()->back();
        }
    }

    public function registerProccess(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);
        $password = Hash::make($request->password);
        $request->merge([
            'password' => $password,
            'image' => 'Null' 
        ]);
        User::create($request->all());
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/auth/login');
    }
}
