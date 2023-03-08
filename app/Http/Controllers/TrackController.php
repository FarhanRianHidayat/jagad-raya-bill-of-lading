<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\shipment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrackController extends Controller
{
    public function index(Request $request){
        $shipment = shipment::all();
        return view('layouts.track', compact('shipment'));
    }

    // public function exportpdf(){
    //     $shipment = shipment::all();

    //    $pdf = PDF::loadview('layouts.tpdf2', [ 'shipment' => $shipment ]);
    //    return $pdf->download('layouts.tpdf2');
    // }

    public function search(Request $request){
        if($request->has('search')){
            $shipment = shipment::where('bolnumber','LIKE','%' .$request->search.'%')->paginate(15);
        } else{
            $shipment = shipment::paginate(10);
        }
        return view('layouts.tracking', compact('shipment'));
    }


    // public function exportpdf(){
    //     //mengambil data dan tampilan dari halaman laporan_pdf
    //     //data di bawah ini bisa kalian ganti nantinya dengan data dari database
    //     $shipment = PDF::loadview('layouts.tpdf2', ['shipment' => 'ini adalah contoh laporan PDF']);
    //     //mendownload laporan.pdf
    // 	return $shipment->download('layouts.tpdf2');
    // }
}
