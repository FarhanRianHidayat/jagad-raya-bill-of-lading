<?php

namespace App\Http\Controllers;

use App\Models\consignee;
use App\Models\good;
use Illuminate\Http\Request;

class GoodController extends Controller
{
    public function index(Request $request){

        $data = good::all();
        $consignee = consignee::all();
        if($request->has('search')){
            $data = good::where('markandnumbers','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = consignee::where('email','LIKE','%' .$request->search.'%')->paginate(15);
        } else{
            // $data = consignee::where('email','LIKE','%' .$request->search.'%')->paginate(15);

            $data = good::paginate(5);
        }

        return view('dashboardemployee.good.table',[
            'data' => $data,
            'consignee' => $consignee,
        ], compact('data'));
    }

    public function create(){
        return view('dashboardemployee.good.add',[
            'data' => good::all(),
            'consignee' => consignee::all()
        ]);
    }

    public function store(Request $request){
        $validasi = $this->validate($request,[
            'consignee_id' => ['required'],
            'type' => ['required'],
            'markandnumbers' => ['required'],
            'description' => ['required'],
            'grossweight' => ['required'],
            'measurement' => ['required'],
        ]);

        good::create($validasi);

        return redirect()->route('good')->with('success','Data berhasil di Tambah!');
    }

    public function edit($id){
        return view('dashboardemployee.good.edit',[
            'data' => good::find($id),
            'consignee' => consignee::all(),
        ]);
    }

    public function update(Request $request, $id){
        $data = good::find($id);
        $data->update($request->all());

        return redirect()->route('good')->with('edit','Data berhasil di Ubah!');
    }

    public function destroy($id){
        $data = good::find($id);
        $data->delete();

        return redirect()->route('good')->with('delete','Data berhasil di Hapus!');
    }
}
