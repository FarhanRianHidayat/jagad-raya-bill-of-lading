<?php

namespace App\Http\Controllers;

use App\Models\consignee;
use Illuminate\Http\Request;

class ConsigneeController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = consignee::where('name','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = consignee::where('email','LIKE','%' .$request->search.'%')->paginate(15);
        } else{
            // $data = consignee::where('email','LIKE','%' .$request->search.'%')->paginate(15);

            $data = consignee::paginate(5);
        }
    
        return view('consignee.table', compact('data'));
        // $data = consignee::paginate(5);
        // return view('consignee.table', compact('data'));
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
