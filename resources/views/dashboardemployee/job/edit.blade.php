{{-- @section('title', 'Tambah User') --}}

@extends('layouts.main')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Edit Data Job</h4>
        </div>
        <div class="card-body">
            <form action="/job/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="1">Job Number</label>
                    <input type="text" class="form-control" id="1" placeholder="Job Number" name="job_number"
                        value="{{ $data->job_number}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Shipper</label>
                    <select class="form-control" name="shipper_id" id="shipper_id">
                        @foreach ($shipper as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Destination</label>
                    <input type="destination" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        value="{{ $data->destination }}">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Type</label>
                    <select class="form-control @error('role') is-invalid @enderror" aria-label="Default select example"
                        id="tipe" name="tipe" value="{{ $data->tipe}}">
                        <option value="1">LCL</option>
                        <option value="2">FCL</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ETD</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        value="{{ $data->etd }}">
                </div>
                <div class="mb-3">
                    <label for="6">Agent</label>
                    <input type="text" class="form-control" id="6" placeholder="Agent" name="agent"
                        value="{{ $data->agent}}">
                </div>
                <button type="submit" class="btn btn-primary float-right" id="editButton">Submit</button>
                <a href="/job" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
