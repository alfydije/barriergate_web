<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function index(){
        return view('signin');
    }
    
    public function auth(Request $request){
        $loginData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($loginData)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }else{
            // $message = [
            //     'required' => 'Login Gagal',
            // ];

            return redirect()->back()->withErrors('Email atau Password Salah!')->with('error', 'Email atau Password Salah!');
        }
    }

    public function logout()
    {
        Auth::logout();

        Session::flash('success', 'Logout berhasil!');

        return redirect()->route('login');
    }
}
