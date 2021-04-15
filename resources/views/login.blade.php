<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Inventario | Login</title>
</head>

<body>
    <div class="container">
        <div class="bg-color bg-gradient"></div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="p-3 mb-2 bg-primary bg-gradient text-black">
                            <div class="shadow p-3 mb-5 bg-body rounded">
                                <div class="text-center mt-5">
                                    <img src="{{ ('img/musi.png') }}">

                                    <h4>LOGIN</h4>
                                    <h5>INVENTARIO</h5>
                                </div>

                                @if(!empty(session('error')))
                                <div class="alert alert-danger">
                                    {{session('error')}}
                                </div>
                                @endif

                                <form action="{{ url('login') }}" method="post">
                                    @csrf

                                    <div class="form-group mt-3">
                                        <label for="email">Email :</label>
                                        <input type="email" name="email" id="emial" class="form-control">
                                    </div>
                                    <div class="form-gruop">
                                        <label for="password">Password :</label>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="mt-5 text-center">
                                        <button type="submit" class="btn btn-outline-primary bg-gradient">LOGIN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>