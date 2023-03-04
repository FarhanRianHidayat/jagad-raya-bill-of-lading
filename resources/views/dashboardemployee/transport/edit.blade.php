{{-- @section('title', 'Tambah User') --}}

@extends('layouts.main')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Edit Data Transport</h4>
        </div>
        <div class="card-body">
            <form action="/transport/update/{{ $transport->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                    <label for="role" class="form-label">Pre-carriage by</label>
                    <select class="form-control @error('role') is-invalid @enderror"
                        aria-label="Default select example" id="precarriage" name="precarriage" value="{{ $transport->precarriage}}">
                                <option value="1">Air</option>
                                <option value="2">Sea</option>
                                <option value="3">Road</option>
                                <option value="4">Rail</option>
                    </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Vessel</label>
                            <input type="text" name="vessel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $transport->vessel }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Voyage Number</label>
                            <input type="text" name="voyagenumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $transport->voyagenumber }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Address</label>
                            <input type="text" name="shipping_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $transport->shipping_address }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Place of Receipt</label>
                            <input type="text" name="place of receipt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $transport->placeofreceipt }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Port of Loading</label>
                            <input type="text" name="port of loading" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $transport->portofloading }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Port of Discharge</label>
                            <input type="text" name="port of discharge" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $transport->portofdischarge }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Place of Delivery</label>
                            <input type="text" name="place of delivery" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $transport->placeofdelivery }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Final Destination</label>
                            <input type="text" name="final destination" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $transport->finaldestination }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Date</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $transport->date }}">
                        </div>
                        <button type="submit" class="btn btn-primary float-right" id="editButton">Submit</button>
                        <a href="/transport" class="btn btn-light">Cancel</a>
                    </form>
        </div>
    </div>
</div>
@endsection
