<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="font">

    <title>Inventario | Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <a class="navbar-brand btn btn-outline-dark" href="#"><b>INVENTARIS BARANG</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="{{ url('dashboard') }}">Dashboard</a>
                    <a class="nav-link active" aria-current="page" href="{{ url('barang') }}">Barang</a>
                    <a class="nav-link" href="{{ url('user') }}">User</a>
                    <a class="nav-link active" aria-current="page" href="{{ url('laporan') }}">Laporan</a>
                    <li class="nav-item dropdown ms-md-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{auth()->user()->name}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('logout') }}">Keluar</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav>

    <div class="alert alert-success text-center mt-2" role="alert">
        <img src="aaa.jpg" class="img-thumbnail mt-5" width="300px">
        <h2 class="alert-heading text-center mt-5">INI HALAMAN DASHBOARD</h2>
        <p><b>Halo.... Selamat datang di Website INVENTARIO BARANG, Silahkan bisa langsung kelola User & Barang anda!</b></p>
        <hr>
        <br>
        <p class="mb-0 text-center"><i>"Semoga Harimu Menyenangkan :)"</i></p>
        <li>
            <i class="fas fa-edit"></i>
        </li>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>