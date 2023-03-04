
{{-- @section('title', 'Tambah User') --}}

@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Add Data Shipment</h4>
        </div>
        <div class="card-body">
            <form class="forms-sample" action="/shipment/insert" method="POST">
                @csrf
                <div class="form-group">
                    <label for="2">Type</label>
                    <select class="form-control" id="1" name="status">
                                <option value="1">Accepted</option>
                                <option value="2">Shipping</option>
                                <option value="3">Arrived</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="/good" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection