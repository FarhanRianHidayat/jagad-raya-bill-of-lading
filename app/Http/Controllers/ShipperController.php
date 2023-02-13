<?php

namespace App\Http\Controllers;

use App\Models\shipper;
use Illuminate\Http\Request;

class ShipperController extends Controller
{
    public function index(){
        return view('shipper.table',[
            'data' => shipper::all(),
        ]);
    }

    public function create(){
        return view('shipper.add',[
            'data' => shipper::all()
        ]);
    }

    public function store(Request $request){
        $validasi = $this->validate($request,[
            'name' => ['required'],
            'address' => ['required'],
            'telephone' => ['required'],
            'email' => ['required'],
        ]);

        shipper::create($validasi);

        return redirect()->route('shipper')->with('success','Data berhasil di Tambah!');
    }

    public function edit($id){
        return view('shipper.edit',[
            'data' => shipper::find($id)
        ]);
    }

    public function update(Request $request, $id){
        $validasi = $this->validate($request,[
            'name' => ['required'],
            'address' => ['required'],
            'telephone' => ['required'],
            'email' => ['required'],
        ]);

        shipper::where('id',$id)->update($validasi);

        return redirect()->route('shipper')->with('edit','Data berhasil di Ubah!');
    }

    public function destroy($id){
        $data = shipper::find($id);
        $data->delete();

        return redirect()->route('shipper')->with('delete','Data berhasil di Hapus!');
    }
}
