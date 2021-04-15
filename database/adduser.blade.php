<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Inventario | Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="{{ url('dashboard') }}">Dashboard</a>
                    <a class="nav-link" href="{{ url('user') }}">User</a>
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

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-10">
                <h5>Kelola User</h5>
                <div class="card">
                <div class="card-body">
                <div class="float-end mb-2">    
                    <a href="{{ url('user/add') }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <table class="table table-scriped table-responsive">
                        <tr>
                            <th>NO.</th>
                            <th>NAMA</th>
                            <th>EMAIL</th>
                            <th>LEVEL</th>
                            <th>ALAMAT</th>
                            <th>TELEPON</th>
                            <th>AKSI</th>
                        </tr>

                        @foreach($users as $user)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $user->name }} </td>
                            <td> {{ $user->email }} </td>
                            <td> {{ $user->level }} </td>
                            <td> {{ $user->alamat }} </td>
                            <td> {{ $user->telepon }} </td>
                            <td>
                                <a href="{{ url('user/edit/') . $user->id }}" class="btn btn-sm btn-success">Edit</a>
                                <a href="{{ url('user/delete/') . $user->id }}" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>