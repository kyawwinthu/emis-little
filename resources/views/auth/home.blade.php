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
    <table class="table table-bordered bg-light yajra-datatable">
        <thead>
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<script type="text/javascript">
    $(function () {
      var table = $('.yajra-datatable').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('home') }}",
          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'name', name: 'name'},
              {data: 'phone', name: 'phone'},
              {data: 'combileAddress', name: 'combileAddress'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

    });
  </script>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 2000);
</script>



@endsection