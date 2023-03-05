<?php

namespace App\Http\Controllers;

use App\Models\shipment;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function index(){
        $shipment = shipment::all();
        return view('layouts.track',[
            'shipment' => $shipment
        ]);
    }
}
