
{{-- @section('title', 'Tambah User') --}}

@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Add Data Location</h4>
        </div>
        <div class="card-body">
            <form class="forms-sample" action="/location/insert" method="POST">
                @csrf
                <div class="form-group">
                    <label for="1">Name of Location</label>
                    <input type="text" class="form-control" id="1" placeholder="Name of Location" name="name_of_location">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="/location" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection