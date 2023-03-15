<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shipper;
use App\Models\job;

class JobController extends Controller
{
    public function index(Request $request){
        $data = job::all();
        $shipper = shipper::all();

        if($request->has('search')){
            // $data = shipment::where('email','LIKE','%' .$request->search.'%')->paginate(15);
            $data = job::where('name','LIKE','%' .$request->search.'%')->paginate(5);
        } else{
            // $data = shipment::where('email','LIKE','%' .$request->search.'%')->paginate(15);

        }
        $data = job::paginate(5);
        
        return view('dashboardemployee.job.table',[
            'data' => $data,
            'shipper' => $shipper,
            // $data = shipment::paginate(5);
        ],compact('data'));
            // return view('shipment.table', compact('data'));
    }

    public function create(){
        return view('dashboardemployee.job.add',[
            'data' => job::all(),
            'shipper' => shipper::all(),
        ]);
    }

    public function store(Request $request){
        $validasi = $this->validate($request,[
            'job_number' => ['required'],
            'shipper_id' => ['required'],
            'destination' => ['required'],
            'tipe' => ['required'],
            'etd' => ['required'],
            'agent' => ['required'],
        ]);
        job::create($validasi);

        return redirect()->route('job')->with('success','Data berhasil di Tambah!');
    }

    public function edit($id){
        return view('dashboardemployee.job.edit',[
            'data' => job::find($id),
            'shipper' => shipper::all(),
        ]);
    }

    public function update(Request $request, $id){

        $data = job::find($id);
        $data->update($request->all());


        return redirect()->route('job')->with('edit','Data berhasil di Ubah!');
    }

    public function destroy($id){
        $data = job::find($id);
        $data->delete();

        return redirect()->route('job')->with('delete','Data berhasil di Hapus!');
    }
}
