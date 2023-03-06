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
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">B/L Number</label>
                    <select class="form-control" name="consignee_id" id="consignee_id">
                        @foreach ($consignee as $row)
                        <option value="{{ $row->id }}">{{ $row->bolnumber }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Date</label>
                    <select class="form-control" name="transport_id" id="transport_id">
                        @foreach ($transport as $row)
                        <option value="{{ $row->id }}">{{ $row->date }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="1">Shipping Date</label>
                    <input type="date" class="form-control" id="8" name="shipping_date">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Shipping Address</label>
                    <select class="form-control" name="shipping_address_id" id="3">
                        @foreach ($transport as $row)
                        <option value="{{ $row->id }}">{{ $row->shipping_address }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Final Destination</label>
                    <select class="form-control" name="finaldestination_id" id="finaldestination_id">
                        @foreach ($transport as $row)
                        <option value="{{ $row->id }}">{{ $row->finaldestination }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <select class="form-control" name="good_id" id="good_id">
                        @foreach ($good as $row)
                        <option value="{{ $row->id }}">{{ $row->description }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="/shipment" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
