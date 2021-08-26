@extends('layouts.master')
@section('title','HOME')
@section('content')

<style>
tbody > tr{
    cursor:pointer;
}
.success-circle{
    color:green;
}
</style>

@if (session('success'))
<div class="container">
    <div class="alert alert-success">
        <i class="fa fa-check-circle success-circle"></i> &nbsp; <strong>{{ session('success') }}</strong>
    </div>
</div>
@endif

<div class="container main-body mb-4">
    <a href="{{ route('addCustomer') }}" class="btn btn-warning btn-sm mb-3 btn-add-customer-a">
        <i class="fa fa-plus-circle"></i>
        <span class="d-lg-inline btn-add-customer">Add Customer</span>
    </a>
    <table class="table table-bordered bg-light">
        <thead>
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Prefecture/City</th>
            <th class="d-none d-sm-table-cell">Address</th>
            <th class="d-none d-sm-table-cell">FacebookAcc</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $key=>$customer)
            <tr data-href="{{ route('detail' , ['id' => $customer->id]) }}">
                <td>{{ ++$key }}</th>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->city }}</td>
                <td class="d-none d-sm-table-cell">{{ $customer->address }}</td>
                <td class="d-none d-sm-table-cell">{{ $customer->facebook_url }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    document.addEventListener('DOMContentLoaded', ()=> {
        const rows = document.querySelectorAll("tr[data-href");
        rows.forEach(row => {
            row.addEventListener("click", () => {
                window.location.href = row.dataset.href;
            });
        });
    });

    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 2000);
</script>

@endsection