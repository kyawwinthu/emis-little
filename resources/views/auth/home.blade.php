<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>EMIS|Home</title>
    <style>
        .nav-slide{
            background:#d8e8ff;
        }
        .nav-topbar{
            background:#b8d5ff;
        }
        .nav-profile{
            padding-bottom:2px!important;
        }
        .dropdown-menu {
            min-width:0;
        }
        .main-body{
            padding:20px;
            font-size:small;
        }
    </style>
</head>
<body>


<div class="container-fluid">
    <div class="row g-0">

        <nav class="col-2 nav-slide">
            <h1 class="h4 py-3 text-center text-primary">
                <i class="fas fa-ghost mr-2"></i>
                <span class="d-none d-lg-inline">
                    Emi's
                </span>
            </h1>
            <div class="list-group text-lg-left">
                <span class="list-group-item disabled d-none d-lg-block">
                    <small>CUSTOMER</small>
                </span>

                <a href="#" class="list-group-item list-group-item-action active">
                    <i class="fas fa-users"></i>
                    <span class="d-none d-lg-inline">Customers</span>
                </a>
            </div>
        </nav>

        <main class="col-10">

            <nav class="navbar navbar-expand-lg navbar-light nav-topbar">
                <div class="flex-fill"></div>
                <div class="navbar nav nav-profile">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-user-circle"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="dropdown-item">User Profile</a>
                            </li>
                            <li>
                            <a href="#" class="dropdown-item">Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-cog"></i>
                        </a>
                    </li>
                </div>
            </nav>

            <div class="container main-body">

                <a href="{{ route('addCustomer') }}" class="btn btn-warning btn-sm mb-3">
                    <i class="fa fa-plus-circle"></i>
                    <span class="d-lg-inline">Add Customer</span>
                </a>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Prefecture/City</th>
                        <th scope="col">Address</th>
                        <th scope="col">FacebookAcc</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        @foreach($customers as $customer)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>{{ $customer->city }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->facebook_url }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </main>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>