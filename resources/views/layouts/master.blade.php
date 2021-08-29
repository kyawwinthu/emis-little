<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <title>EMIS|@yield('title')</title>
    <style>
     .nav-header-text{
         font-size:25px!important;
         font-weight: bold;
         color:#8C489F!important;
     }
     .main-body{
        font-size:12px;
     }
     .btn-add-customer{
        font-size:12px;
     }
     .btn-add-customer-a{
        border-radius: 20px;
        padding-left: 10px;
        padding-right: 10px;
     }
     .navbar-collapse {
        flex-grow: 0;
     }
     .nav-item a{
         font-size:13px;
         font-weight: bold;
     }
     .nav-item a .active{
         color:#8C489F;
     }
    </style>
</head>
<body>


<div class="container-fluid navbar-light bg-light mb-4">
    <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand nav-header-text" href="#">Emi's</a>
        <div class="flex-fill"></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-flex">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Customers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
</div>

@yield('content')

</body>
</html>