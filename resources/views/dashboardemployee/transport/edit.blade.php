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
                    <label for="1" class="form-label">Place Of Receipt</label>
                    <select class="form-select" name="location_id" id="5">
                        @foreach ($location as $row)
                        <option value="{{ $row->id }}">{{ $row->name_of_location }}</option>
                        @endforeach
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
                        {{-- <div class="mb-3">
                            <label for="1">Port Of Loading</label>
                            <select class="form-control" name="portofloading_id" id="5">
                                @foreach ($location as $row)
                                <option value="{{ $row->id }}">{{ $row->name_of_location }}</option>
                                @endforeach
                            </select>                
                        </div>
                        <div class="mb-3">
                            <label for="1">Port OF Discharge</label>
                            <select class="form-control" name="portofdischarge_id" id="5">
                                @foreach ($location as $row)
                                <option value="{{ $row->id }}">{{ $row->name_of_location }}</option>
                                @endforeach
                            </select>               
                         </div>
                        <div class="mb-3">
                            <label for="1">Place Of Delivery</label>
                            <select class="form-control" name="placeofdelivery_id" id="5">
                                @foreach ($location as $row)
                                <option value="{{ $row->id }}">{{ $row->name_of_location }}</option>
                                @endforeach
                            </select>                
                        </div>
                        <div class="mb-3">
                            <label for="1">Final Destination</label>
                            <select class="form-control" name="finaldestination_id" id="5">
                                @foreach ($location as $row)
                                <option value="{{ $row->id }}">{{ $row->name_of_location }}</option>
                                @endforeach
                            </select>                
                        </div> --}}
                        <button type="submit" class="btn btn-primary float-right" id="editButton">Submit</button>
                        <a href="/transport" class="btn btn-light">Cancel</a>
                    </form>
        </div>
    </div>
</div>
@endsection
