<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pegawai</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('home')}}">LaundryOnlyONE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="{{route('home')}}">Beranda</a>
                <a class="nav-link" href="{{route('pegawai.index')}}">Pegawai</a>
                <a class="nav-link" href="{{route('member.index')}}">Membership</a>
                <a class="nav-link" href="{{route('barang.index')}}">Barang</a>
                <a class="nav-link active" href="{{route('users.index')}}">Pengguna</a>
                <a class="nav-link" href="{{route('pembelianbarang.index')}}">Pembelian Barang</a>
                <a class="nav-link" href="{{route('datalaundrymember.index')}}">Data Laundry Member</a>
                <a class="nav-link" href="{{route('datalaundrynonmember.index')}}">Data Laundry Non-Member</a>
  

            </div>
          </div>
        </div>
    </nav>
    <br>
    <div class="container">
        
        <h1 class="mb-4">Data Pengguna</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah Pengguna</a><hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pengguna</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email</th>
                    <th scope="col">Peran</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $key => $users)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $users->name }}</td>
                        <td class="text-truncate" style="max-width: 150px;">{{ $users->password }}</td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->role }}</td>
                        <td> 
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('users.destroy', $users->id) }}" method="POST">
                                <a href="{{ route('users.show', $users->id) }}" class="btn btn-sm btn-info">Detail</a>
                                <a href="{{ route('users.edit', $users->id) }}" class="btn btn-sm btn-warning">Update</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <div class="alert alert-danger">
                            Data Pengguna Belum Ada.
                        </div>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
