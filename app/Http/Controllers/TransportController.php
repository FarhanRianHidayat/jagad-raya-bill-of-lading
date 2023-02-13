<?php

namespace App\Http\Controllers;

use App\Models\transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function index(){
        return view('transport.table',[
            'data' => transport::all(),
        ]);
    }

    public function create(){
        return view('transport.add',[
            'data' => transport::all()
        ]);
    }

    public function store(Request $request){
        $validasi = $this->validate($request,[
            'precarriage' => ['required'],
            'placeofreceipt' => ['required'],
            'vessel' => ['required'],
            'voyagenumber' => ['required'],
            'portofloading' => ['required'],
            'portofdischarge' => ['required'],
            'placeofdelivery' => ['required'],
            'finaldestination' => ['required'],
        ]);

        transport::create($validasi);

        return redirect()->route('transport')->with('success','Data berhasil di Tambah!');
    }

    public function edit($id){
        return view('transport.edit',[
            'data' => transport::find($id)
        ]);
    }

    public function update(Request $request, $id){
        $validasi = $this->validate($request,[
            'precarriage' => ['required'],
            'placeofreceipt' => ['required'],
            'vessel' => ['required'],
            'voyagenumber' => ['required'],
            'portofloading' => ['required'],
            'portofdischarge' => ['required'],
            'placeofdelivery' => ['required'],
            'finaldestination' => ['required'],
        ]);

        transport::where('id',$id)->update($validasi);

        return redirect()->route('transport')->with('edit','Data berhasil di Ubah!');
    }

    public function destroy($id){
        $data = transport::find($id);
        $data->delete();

        return redirect()->route('transport')->with('delete','Data berhasil di Hapus!');
    }
}
