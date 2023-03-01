{{-- @section('title', 'Tambah User') --}}

@extends('layouts.main')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Edit Location</h4>
        </div>
        <div class="card-body">
            <form action="/location/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name of Location</label>
                            <input type="text" name="name_of_location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->name_of_location }}">
                        </div>
                        <button type="submit" class="btn btn-primary float-right" id="editButton">Submit</button>
                        <a href="/location" class="btn btn-light">Cancel</a>
                    </form>
        </div>
    </div>
</div>
@endsection
