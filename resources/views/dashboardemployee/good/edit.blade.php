{{-- @section('title', 'Tambah User') --}}

@extends('layouts.main')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Edit Data Goods</h4>
        </div>
        <div class="card-body">
            <form action="/good/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                    <label for="role" class="form-label">Type</label>
                    <select class="form-control @error('role') is-invalid @enderror"
                        aria-label="Default select example" id="type" name="type" value="{{ $data->type}}">
                                <option value="1">Export</option>
                                <option value="2">Import</option>
                    </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mark & Numbers</label>
                            <input type="text" name="markandnumbers" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->markandnumbers }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Description of Goods</label>
                            <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->description }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Gross Weight</label>
                            <input type="text" name="grossweight" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->grossweight }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Measurement</label>
                            <input type="text" name="measurement" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->measurement }}">
                        </div>
                        <button type="submit" class="btn btn-primary float-right" id="editButton">Submit</button>
                        <a href="/good" class="btn btn-light">Cancel</a>
                    </form>
        </div>
    </div>
</div>
@endsection
