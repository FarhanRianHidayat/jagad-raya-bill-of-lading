{{-- @section('title', 'Tambah User') --}}

@extends('layouts.main')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Edit Consignee</h4>
        </div>
        <div class="card-body">
            <form action="/consignee/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->address }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Telephone</label>
                            <input type="text" name="telephone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->telephone }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" id="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->email }}">
                        </div>
                        <button type="submit" class="btn btn-primary float-right" id="editButton">Submit</button>
                        <a href="/user" class="btn btn-light">Cancel</a>
                    </form>
        </div>
    </div>
</div>
@endsection
