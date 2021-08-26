<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>EMIS|Login</title>

    <style>
        .login-card{
            margin-top:40%
        }
        h1{
            text-align:center;
        }
        .card-header{
            background-color: #8C489F;
            color:white;
        }
        .btn{
            background-color:#F4A817;
            font-weight: bold;
            color:white;
            font-size:20px;
        }
        .card,.card-header{
            border-color:#8C489F;
        }
    </style>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card login-card">
                    <div class="card-header mb-3">
                        <h1>Emi's LBC</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('userLogin') }}" method="post">
                            @csrf

                            {{-- Validation Error Message --}}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                    @if ($errors->has('email') && $errors->has('password'))
                                        <br>
                                    @endif
                                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                </div>
                            @endif
                            @if (session('success'))
                            <div class="alert alert-danger">
                                <span class="text-danger">{{ session('success') }}</span>
                            </div>
                            @endif

                            {{-- Login Form --}}
                            <div class="input-group mb-4">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input type="text" name="email" class="form-control" placeholder="email" value="{{ old('email') }}"
                                aria-label="email" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text" id="basic-addon2">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" name="password" class="form-control" placeholder="password" value="{{ old('password') }}"
                                aria-label="password" aria-describedby="basic-addon2">
                            </div>
                            <div class="d-grid form-group mb-4 max-auto">
                                <button type="submit" class="btn">Login</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>
</html>