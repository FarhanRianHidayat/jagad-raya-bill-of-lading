<?php

namespace App\Http\Controllers;

use App\Models\transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function index(Request $request){
        $transport = transport::all();
        if($request->has('search')){
            $transport = transport::where('name','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = consignee::where('email','LIKE','%' .$request->search.'%')->paginate(15);
        } else{
            // $data = consignee::where('email','LIKE','%' .$request->search.'%')->paginate(15);

            $transport = transport::paginate(5);
        }
        return view('dashboardemployee.transport.table',[
            'transport' => $transport,
        ],compact('transport') );
    }

    public function create(){
        return view('dashboardemployee.transport.add',[
            'transport' => transport::all(),
        ]);
    }

    public function store(Request $request){
        $validasi = $this->validate($request,[
            'precarriage' => ['required'],
            'vessel' => ['required'],
            'voyagenumber' => ['required'],
            'shipping_address' => ['required'],
            'placeofreceipt' => ['required'],
            'portofloading' => ['required'],
            'portofdischarge' => ['required'],
            'placeofdelivery' => ['required'],
            'finaldestination' => ['required'],
            'date' => ['required'],
        ]);

        transport::create($validasi);

        return redirect()->route('transport')->with('success','Data berhasil di Tambah!');
    }

    public function edit($id){
        return view('dashboardemployee.transport.edit',[
            'transport' => transport::find($id),
        ]);
    }

    public function update(Request $request, $id){

        $transport = transport::find($id);
        $transport->update($request->all());

        return redirect()->route('transport')->with('edit','Data berhasil di Ubah!');
    }

    public function destroy($id){
        $transport = transport::find($id);
        $transport->delete();

        return redirect()->route('transport')->with('delete','Data berhasil di Hapus!');
    }
}
