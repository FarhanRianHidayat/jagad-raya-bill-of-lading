<?php

namespace App\Http\Controllers;
use App\Models\consignee;
use App\Models\good;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\shipment;
use App\Models\transport;
use Illuminate\Http\Request;

class ShipmentsController extends Controller
{
    public function index(Request $request){
        $data = shipment::all();
        $transport = transport::all();
        $good = good::all();
        // $consignee = consignee::all();

        if($request->has('search')){
            // $data = shipment::where('email','LIKE','%' .$request->search.'%')->paginate(15);
            $data = shipment::where('name','LIKE','%' .$request->search.'%')->paginate(5);
        } else{
            // $data = shipment::where('email','LIKE','%' .$request->search.'%')->paginate(15);

        }
        $data = shipment::paginate(5);
        
        return view('dashboardemployee.shipment.table',[
            'data' => $data,
            'transport' => $transport,
            'good' => $good,
            // 'consignee' => $consignee,
            // $data = shipment::paginate(5);
        ],compact('data'));
            // return view('shipment.table', compact('data'));
    }

    //  public function exportpdf(){
    //     //mengambil data dan tampilan dari halaman laporan_pdf
    //     //data di bawah ini bisa kalian ganti nantinya dengan data dari database
    //     $shipment = PDF::loadview('layouts.tpdf2', ['shipment' => 'ini adalah contoh laporan PDF']);
    //     //mendownload laporan.pdf
    // 	return $shipment->download('layouts.tpdf2');
    // } 

    //      public function exportpdf()
    // {
    // 	$shipment = shipment::all();
 
    // 	$pdf = PDF::loadview('exportpd',['shipment'=>$shipment]);
    // 	return $pdf->download('layouts.tpdf2');
    // }

    public function create(){
        return view('dashboardemployee.shipment.add',[
            'data' => shipment::all(),
            'transport' => transport::all(),
            'good' => good::all(),
            // 'consignee' => consignee::all(),
        ]);
    }

    public function store(Request $request){
        $validasi = $this->validate($request,[
            'status' => ['required'],
            'bolnumber' => ['required'],
            'transport_id' => ['required'],
            'shipping_date' => ['required'],
            'shipping_address_id' => ['required'],
            'finaldestination_id' => ['required'],
            'good_id' => ['required'],
        ]);
        shipment::create($validasi);

        return redirect()->route('shipment')->with('success','Data berhasil di Tambah!');
    }

    public function edit($id){
        return view('dashboardemployee.shipment.edit',[
            'data' => shipment::find($id),
            'transport' => transport::all(),
            'good' => good::all(),
            // 'consignee' => consignee::all(),
        ]);
    }

    public function update(Request $request, $id){

        $data = shipment::find($id);
        $data->update($request->all());


        return redirect()->route('shipment')->with('edit','Data berhasil di Ubah!');
    }

    public function destroy($id){
        $data = shipment::find($id);
        $data->delete();

        return redirect()->route('shipment')->with('delete','Data berhasil di Hapus!');
    }
}
