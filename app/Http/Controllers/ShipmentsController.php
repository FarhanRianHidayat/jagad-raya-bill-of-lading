<?php

namespace App\Http\Controllers;

use App\Models\shipment;
use Illuminate\Http\Request;

class ShipmentsController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = shipment::where('name','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = shipment::where('email','LIKE','%' .$request->search.'%')->paginate(15);
        } else{
            // $data = shipment::where('email','LIKE','%' .$request->search.'%')->paginate(15);

            $data = shipment::paginate(5);
        }
    
        return view('dashboardemployee.shipment.table', compact('data'));
        // $data = shipment::paginate(5);
        // return view('shipment.table', compact('data'));
    }

    public function create(){
        return view('dashboardemployee.shipment.add',[
            'data' => shipment::all()
        ]);
    }

    public function store(Request $request){
        $validasi = $this->validate($request,[
            'status' => ['required'],
        ]);

        shipment::create($validasi);

        return redirect()->route('shipment')->with('success','Data berhasil di Tambah!');
    }

    public function edit($id){
        return view('dashboardemployee.shipment.edit',[
            'data' => shipment::find($id)
        ]);
    }

    public function update(Request $request, $id){
        $validasi = $this->validate($request,[
            'status' => ['required'],
        ]);

        shipment::where('id',$id)->update($validasi);

        return redirect()->route('shipment')->with('edit','Data berhasil di Ubah!');
    }

    public function destroy($id){
        $data = shipment::find($id);
        $data->delete();

        return redirect()->route('shipment')->with('delete','Data berhasil di Hapus!');
    }
}
