<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function indexAdmin(){
        return view('layouts.dashboard');
    }

    public function indexEmployee(){
        return view('layouts.dashboard');
    }
}
