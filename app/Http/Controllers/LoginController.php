<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.login');
    }
    public function authenticate(Request $request){
        
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials)){
            if(auth()->user()->role == 'admin'){
                $request->session()->regenerate();
                return redirect()->intended('/user');
            }if(auth()->user()->role == 'employee'){
                $request->session()->regenerate();
                return redirect()->intended('/transport');
            }else if(auth()->user()->role == 'user'){
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
        }
        return back()->with('loginError','Login Failed!');
    }

    public function logout(Request $request){
        auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
