
{{-- @section('title', 'Tambah User') --}}

@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Add Data Consignee</h4>
        </div>
        <div class="card-body">
            <form class="forms-sample" action="/consignee/insert" method="POST">
                @csrf
                <div class="form-group">
                    <label for="1">B/L Number</label>
                    <input type="text" class="form-control" id="1" placeholder="B/L Number" name="bolnumber">
                </div>
                <div class="form-group">
                    <label for="1">Nama</label>
                    <input type="text" class="form-control" id="2" placeholder="Name" name="name">
                </div>
                <div class="form-group">
                    <label for="2">Address</label>
                    <input type="text" class="form-control" id="3" placeholder="Address" name="address">
                </div>
                <div class="form-group">
                    <label for="3">Telephone</label>
                    <input type="text" class="form-control" id="4" placeholder="Telephone" name="telephone">
                </div>
                <div class="form-group">
                    <label for="4">Email</label>
                    <input type="email" class="form-control" id="5" placeholder="Email" name="email">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="/consignee" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection