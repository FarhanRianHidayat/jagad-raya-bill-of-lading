<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\shipment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrackController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $shipment = shipment::where('consignee_id','LIKE','%' .$request->search.'%')->paginate(15);
        } else{
            $shipment = shipment::paginate(10);
        }
        return view('layouts.track', compact('shipment'));
    }

    // public function exportpdf(){
    //     $shipment = shipment::all();

    //    $pdf = PDF::loadview('layouts.tpdf2', [ 'shipment' => $shipment ]);
    //    return $pdf->download('layouts.tpdf2');
    // }

    public function exportpdf(){
        $shipment = shipment::all();

       view()->share('shipment', $shipment);
       $pdf = PDF::loadview('layouts.tpdf2');
       return $pdf->download('layouts.pdf');
        return 'success';
    }
}
