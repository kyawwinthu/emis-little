@extends('layouts.master')
@section('title','ADD CUSTOMER')
@section('content')

    <style>
        .main-body{
            font-size:12px;
        }
        h6{
            margin-bottom: 0px;
        }
        .btn{
            background-color:#F4A817;
            border-color:#F4A817;
            font-weight: bold;
            color:white;
            font-size:20px;
        }
        .btn:hover{
            background-color:#ffb938;
            border-color:#ffb938;
        }
    </style>


    <div class="container main-body">
        <div class="row">
            <div>
                <div class="card login-card mb-4">
                    <div class="card-header">
                        <h6>Edit Customer</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('edit') }}" method="post">
                            @csrf
                            <div class="row">
                            <input type="hidden" name="id" value="{{ $customer->id }}">
                            <div class="form-group mb-3 col-lg-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $customer->name }}" placeholder="">
                                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group mb-3 col-lg-6">
                                <label for="name" class="form-label">Phone No</label>
                                <input type="text" name="phone" class="form-control" value="{{ $customer->phone }}" placeholder="">
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group mb-3 col-lg-6">
                                <label for="zipcode" class="form-label">Zip Code (XXX-XXXX)</label>
                                <input type="text" name="zipcode" class="form-control" value="{{ $customer->zipcode }}" placeholder="">
                                <span class="text-danger">@error('zipcode'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group mb-3 col-lg-6">
                                <label for="perfecture" class="form-label">Perfecture</label>
                                <input type="text" name="perfecture" class="form-control" value="{{ $customer->perfecture }}" placeholder="">
                                <span class="text-danger">@error('perfecture'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group mb-3 col-lg-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" name="city" class="form-control" value="{{ $customer->city }}" placeholder="">
                                <span class="text-danger">@error('city'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group mb-3 col-lg-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" value="{{ $customer->address }}" placeholder="">
                                <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group mb-4 col-lg-6">
                                <label for="facebook_url" class="form-label">facebook URL</label>
                                <input type="text" name="facebook_url" class="form-control" value="{{ $customer->facebook_url }}" placeholder="">
                                <span class="text-danger">@error('facebook_url'){{ $message }} @enderror</span>
                            </div>
                            <div class="d-grid form-group mb-3 max-auto">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
