@extends('layouts.master')
@section('title','DETAIL CUSTOMER')
@section('content')

    <style>
        .main-body{
            font-size:12px;
        }
        h6{
            margin-bottom: 0px;
        }
    </style>


    <div class="container main-body">
        <div class="row">
            <div>
                <div class="card login-card mb-4">
                    <div class="card-header">
                        <div class="float-start">
                        <h6 class="float-start">Customer Detail</h6>
                        </div>
                        <div class="float-end">
                            <a href="{{ route('editCustomer' , ['id' => $customer->id]) }}" class="btn btn-primary btn-sm mb-3">
                                <i class="fa fa-pencil-alt"></i>
                                <span class="d-lg-inline btn-add-customer">Edit</span>
                            </a>
                            <a onclick="return confirm('Are you sure want to Delete.')" href="{{ route('deleteCustomer' , ['id' => $customer->id]) }}" class="btn btn-danger btn-sm mb-3">
                                <i class="fa fa-trash"></i>
                                <span class="d-lg-inline btn-add-customer">Delete</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group mb-3 col-lg-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $customer->name }}" placeholder="" disabled>
                            </div>
                            <div class="form-group mb-3 col-lg-6">
                                <label for="name" class="form-label">Phone No</label>
                                <input type="text" name="phone" class="form-control" value="{{ $customer->phone }}" placeholder="" disabled>
                            </div>
                            <div class="form-group mb-3 col-lg-6">
                                <label for="zipcode" class="form-label">Zip Code (XXX-XXXX)</label>
                                <input type="text" name="zipcode" class="form-control" value="{{ $customer->zipcode }}" placeholder="" disabled>
                            </div>
                            <div class="form-group mb-3 col-lg-6">
                                <label for="perfecture" class="form-label">Perfecture</label>
                                <input type="text" name="perfecture" class="form-control" value="{{ $customer->perfecture }}" placeholder="" disabled>
                            </div>
                            <div class="form-group mb-3 col-lg-6">
                                <label for="city" class="form-label">City</label>
                                <input type="text" name="city" class="form-control" value="{{ $customer->city }}" placeholder="" disabled>
                            </div>
                            <div class="form-group mb-3 col-lg-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control" value="{{ $customer->address }}" placeholder="" disabled>
                            </div>
                            <div class="form-group mb-4 col-lg-6">
                                <label for="facebook_url" class="form-label">facebook URL</label>
                                <input type="text" name="facebook_url" class="form-control" value="{{ $customer->facebook_url }}" placeholder="" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
