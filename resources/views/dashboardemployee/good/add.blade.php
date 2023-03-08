
{{-- @section('title', 'Tambah User') --}}

@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title m-0 font-weight-bold text-primary">Add Data Goods</h4>
        </div>
        <div class="card-body">
            <form class="forms-sample" action="/good/insert" method="POST">
                @csrf
                <div class="form-group">
                    <label for="2">Type</label>
                    <select class="form-control" id="1" name="type">
                                <option value="1">Export</option>
                                <option value="2">Import</option>
                    </select>
                </div>
                {{-- <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">B/L Number</label>
                    <select class="form-control" name="consignee_id" id="consignee_id">
                        @foreach ($consignee as $row)
                        <option value="{{ $row->id }}">{{ $row->bolnumber }}</option>
                        @endforeach
                    </select>
                </div> --}}
                <div class="form-group">
                    <label for="1">Mark & Numbers</label>
                    <input type="text" class="form-control" id="2" placeholder="Mark & Numbers" name="markandnumbers">
                </div>
                <div class="form-group">
                    <label for="1">Description of Goods</label>
                    <input type="text" class="form-control" id="3" placeholder="Description of Goods" name="description">
                </div>
                <div class="form-group">
                    <label for="1">Gross Weight</label>
                    <input type="text" class="form-control" id="4" placeholder="Gross Weight" name="grossweight">
                </div>
                <div class="form-group">
                    <label for="1">Measurement</label>
                    <input type="text" class="form-control" id="5" placeholder="Measurement" name="measurement">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="/good" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection