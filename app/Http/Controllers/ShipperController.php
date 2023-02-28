<?php

namespace App\Http\Controllers;

use App\Models\shipper;
use Illuminate\Http\Request;

class ShipperController extends Controller
{
    public function index(Request $request){
        
        if($request->has('search')){
            $data = shipper::where('name','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = consignee::where('email','LIKE','%' .$request->search.'%')->paginate(15);
        } else{
            // $data = consignee::where('email','LIKE','%' .$request->search.'%')->paginate(15);

            $data = shipper::paginate(5);
        }
        return view('dashboardemployee.shipper.table', compact('data'));
    }

    public function create(){
        return view('dashboardemployee.shipper.add',[
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
        return view('dashboardemployee.shipper.edit',[
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
