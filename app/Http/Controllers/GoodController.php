<?php

namespace App\Http\Controllers;

use App\Models\good;
use Illuminate\Http\Request;

class GoodController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = good::where('markandnumbers','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = consignee::where('email','LIKE','%' .$request->search.'%')->paginate(15);
        } else{
            // $data = consignee::where('email','LIKE','%' .$request->search.'%')->paginate(15);

            $data = good::paginate(5);
        }

        return view('dashboardemployee.good.table', compact('data'));
    }

    public function create(){
        return view('dashboardemployee.good.add',[
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
        return view('dashboardemployee.good.edit',[
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
