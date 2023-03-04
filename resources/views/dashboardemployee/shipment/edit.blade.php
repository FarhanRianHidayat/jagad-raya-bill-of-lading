{{-- @section('title', 'Tambah User') --}}

@extends('layouts.main')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Edit Data Shipment</h4>
        </div>
        <div class="card-body">
            <form action="/shipment/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                    <label for="role" class="form-label">Status</label>
                    <select class="form-control @error('role') is-invalid @enderror"
                        aria-label="Default select example" id="status" name="status" value="{{ $data->status}}">
                                <option value="1">Accepted</option>
                                <option value="2">Shipping</option>
                                <option value="3">Arrived</option>
                    </select>
                        </div>
                        <button type="submit" class="btn btn-primary float-right" id="editButton">Submit</button>
                        <a href="/good" class="btn btn-light">Cancel</a>
                    </form>
        </div>
    </div>
</div>
@endsection
