<?php

namespace App\Http\Controllers;

use App\Models\location;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(Request $request){
        
        if($request->has('search')){
            $data = location::where('name','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = consignee::where('email','LIKE','%' .$request->search.'%')->paginate(15);
        } else{
            // $data = consignee::where('email','LIKE','%' .$request->search.'%')->paginate(15);

            $data = location::paginate(5);
        }
        return view('dashboardemployee.location.table', compact('data'));
    }

    public function create(){
        return view('dashboardemployee.location.add',[
            'data' => location::all()
        ]);
    }

    public function store(Request $request){
        $validasi = $this->validate($request,[
            'name_of_location' => ['required'],
        ]);

        location::create($validasi);

        return redirect()->route('location')->with('success','Data berhasil di Tambah!');
    }

    public function edit($id){
        return view('dashboardemployee.location.edit',[
            'data' => location::find($id)
        ]);
    }

    public function update(Request $request, $id){
        $validasi = $this->validate($request,[
            'name_of_location' => ['required'],
        ]);

        location::where('id',$id)->update($validasi);

        return redirect()->route('location')->with('edit','Data berhasil di Ubah!');
    }

    public function destroy($id){
        $data = location::find($id);
        $data->delete();

        return redirect()->route('location')->with('delete','Data berhasil di Hapus!');
    }
}
