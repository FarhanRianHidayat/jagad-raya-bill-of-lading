<?php

namespace App\Http\Controllers;

use App\Models\good;
use Illuminate\Http\Request;

class GoodController extends Controller
{
    public function index(){
        return view('good.table',[
            'data' => good::all(),
        ]);
    }

    public function create(){
        return view('good.add',[
            'data' => good::all()
        ]);
    }

    public function store(Request $request){
        $validasi = $this->validate($request,[
            'type' => ['required'],
            'markandnumbers' => ['required'],
            'description' => ['required'],
            'grossweight' => ['required'],
            'measurement' => ['required'],
            'bolnumber' => ['required'],
        ]);

        good::create($validasi);

        return redirect()->route('good')->with('success','Data berhasil di Tambah!');
    }

    public function edit($id){
        return view('good.edit',[
            'data' => good::find($id)
        ]);
    }

    public function update(Request $request, $id){
        $validasi = $this->validate($request,[
            'type' => ['required'],
            'markandnumbers' => ['required'],
            'description' => ['required'],
            'grossweight' => ['required'],
            'measurement' => ['required'],
            'bolnumber' => ['required'],
        ]);

        good::where('id',$id)->update($validasi);

        return redirect()->route('good')->with('edit','Data berhasil di Ubah!');
    }

    public function destroy($id){
        $data = good::find($id);
        $data->delete();

        return redirect()->route('good')->with('delete','Data berhasil di Hapus!');
    }
}
