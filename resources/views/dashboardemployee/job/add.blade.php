@section('title', 'Tambah Job')

@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Add Data Job</h4>
        </div>
        <div class="card-body">
            <form class="forms-sample" action="/job/insert" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="1">Job Number</label>
                    <input type="text" class="form-control" id="1" placeholder="Job Number" name="job_number">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Shipper Name</label>
                    <select class="form-control" name="shipper_id" id="2">
                        @foreach ($shipper as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="1">Destination</label>
                    <input type="text" class="form-control" id="3" name="destination">
                </div>
                <div class="form-group">
                    <label for="2">Type</label>
                    <select class="form-control" id="4" name="tipe">
                        <option value="1">LCL</option>
                        <option value="2">FCL</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="1">ETD</label>
                    <input type="date" class="form-control" id="5" name="etd">
                </div>
                <div class="mb-3">
                    <label for="1">Agent</label>
                    <input type="text" class="form-control" id="6" placeholder="Agent" name="agent">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="/job" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
