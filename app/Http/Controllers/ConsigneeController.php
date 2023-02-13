<?php

namespace App\Http\Controllers;

use App\Models\consignee;
use Illuminate\Http\Request;

class ConsigneeController extends Controller
{
    public function index(){
        return view('consignee.table',[
            'data' => consignee::all(),
        ]);
    }

    public function create(){
        return view('consignee.add',[
            'data' => consignee::all()
        ]);
    }

    public function store(Request $request){
        $validasi = $this->validate($request,[
            'name' => ['required'],
            'address' => ['required'],
            'telephone' => ['required'],
            'email' => ['required'],
        ]);

        consignee::create($validasi);

        return redirect()->route('consignee')->with('success','Data berhasil di Tambah!');
    }

    public function edit($id){
        return view('consignee.edit',[
            'data' => consignee::find($id)
        ]);
    }

    public function update(Request $request, $id){
        $validasi = $this->validate($request,[
            'name' => ['required'],
            'address' => ['required'],
            'telephone' => ['required'],
            'email' => ['required'],
        ]);

        consignee::where('id',$id)->update($validasi);

        return redirect()->route('consignee')->with('edit','Data berhasil di Ubah!');
    }

    public function destroy($id){
        $data = consignee::find($id);
        $data->delete();

        return redirect()->route('consignee')->with('delete','Data berhasil di Hapus!');
    }
}
