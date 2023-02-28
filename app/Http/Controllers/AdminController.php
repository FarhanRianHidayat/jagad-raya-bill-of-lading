<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        if(auth()->guest()){
            abort(403);
        }
        return view('layouts.dashboard');
    }
}
