<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>EMIS|Add Customer</title>

    <style>
        .login-card{
            margin-top:50%
        }
        h1{
            text-align:center;
        }
    </style>

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card login-card">
                    <div class="card-header">
                        <h1>Add Customer</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('add') }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="name" class="form-control" placeholder="name">
                                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="phone" class="form-control" placeholder="phone">
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="zipcode" class="form-control" placeholder="zipcode">
                                <span class="text-danger">@error('zipcode'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="perfecture" class="form-control" placeholder="perfecture">
                                <span class="text-danger">@error('perfecture'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="city" class="form-control" placeholder="city">
                                <span class="text-danger">@error('city'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="address" class="form-control" placeholder="address">
                                <span class="text-danger">@error('address'){{ $message }} @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="facebook_url" class="form-control" placeholder="facebook_url">
                                <span class="text-danger">@error('facebook_url'){{ $message }} @enderror</span>
                            </div>
                            <div class="d-grid form-group mb-3 max-auto">
                                <button type="submit" class="btn btn-primary">Add</button>
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