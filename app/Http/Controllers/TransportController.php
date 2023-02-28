<?php

namespace App\Http\Controllers;

use App\Models\transport;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = transport::where('name','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = consignee::where('email','LIKE','%' .$request->search.'%')->paginate(15);
        } else{
            // $data = consignee::where('email','LIKE','%' .$request->search.'%')->paginate(15);

            $data = transport::paginate(5);
        }
        return view('dashboardemployee.transport.table', compact('data'));
    }

    public function create(){
        return view('dashboardemployee.transport.add',[
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
        return view('dashboardemployee.transport.edit',[
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
