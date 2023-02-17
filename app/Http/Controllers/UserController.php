<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        
        if($request->has('search')){
            $data = user::where('name','LIKE','%' .$request->search.'%')->paginate(5);
            // $data = consignee::where('email','LIKE','%' .$request->search.'%')->paginate(15);
        } else{
            // $data = consignee::where('email','LIKE','%' .$request->search.'%')->paginate(15);

            $data = user::paginate(5);
        }
        return view('user.table', compact('data'));
    }

    public function create(){
        $data = User::all();
        return view('user.add',[
            'data' => $data
        ]);
    }

    public function store(Request $request){

        $validatedData = $this->validate($request,[
            'name' => ['required'],
            'role' => ['required'],
            // 'username' => ['required'],
            'email' => ['required'],
            'password' => ['required']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        return redirect()->route('user')->with('Success','Data berhasil Ditambahkan!');
    }

    public function edit($id){
        $data = User::find($id);

        return view('user.edit',[
            'data' => $data
        ]);
    }

    
    
    public function update(Request $request,$id){
        $validasi = $this->validate($request,[
            'name' => ['required'],
            'role' => ['required'],
            // 'username' => ['required'],
            'email' => ['required'],
            'password' => ['required']
        ]);
        $validasi['password'] = bcrypt($validasi['password']);
        User::where('id',$id)->update($validasi);

        return redirect()->route('user')->with('edit','Data berhasil di Ubah!');
    }

    public function destroy($id){
        $data = user::find($id);
        $data->delete();
        
        return redirect()->route('user');
    }

}

