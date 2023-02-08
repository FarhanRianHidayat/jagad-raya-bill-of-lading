@extends('layouts.main')
@section('title', 'Tambah User')

@section('content')

<div class="container">
    <h1 class="text-center mb-4 mt-4">Tambah User</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body" style="width: 90%;">
                    <form action="/user/insert" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="3" class="form-label">Role</label>
                            <select class="form-control" id="3" name="role">
                                <option value="1">Admin</option>
                                <option value="2">Employee</option>
                                <option value="2">User</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control">
                            @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary float-right" id="submitButton">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection