{{-- @section('title', 'Tambah User') --}}

@extends('layouts.main')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Edit Data Transport</h4>
        </div>
        <div class="card-body">
            <form action="/transport/update/{{ $data->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                    <label for="role" class="form-label">Pre-carriage by</label>
                    <select class="form-control @error('role') is-invalid @enderror"
                        aria-label="Default select example" id="precarriage" name="precarriage" value="{{ $data->precarriage}}">
                                <option value="1">Air</option>
                                <option value="2">Sea</option>
                                <option value="3">Road</option>
                                <option value="4">Rail</option>
                    </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Placce Of Receipt</label>
                            <input type="text" name="placeofreceipt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->placeofreceipt }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Vessel</label>
                            <input type="text" name="vessel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->vessel }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Voyage Number</label>
                            <input type="text" name="voyagenumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->voyagenumber }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Port Of Loading</label>
                            <input type="text" name="portofloading" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->portofloading }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Port Of Discharge</label>
                            <input type="text" name="portofdischarge" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->portofdischarge }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Place Of Delivery</label>
                            <input type="text" name="placeofdelivery" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->placeofdelivery }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Final Destination</label>
                            <input type="text" name="finaldestination" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->finaldestination }}">
                        </div>
                        <button type="submit" class="btn btn-primary float-right" id="editButton">Submit</button>
                        <a href="/transport" class="btn btn-light">Cancel</a>
                    </form>
        </div>
    </div>
</div>
@endsection
