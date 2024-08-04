<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembelian Barang</title>
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
                <a class="nav-link" href="{{route('users.index')}}">Pengguna</a>
                <a class="nav-link active" href="{{route('pembelianbarang.index')}}">Pembelian Barang</a>
                <a class="nav-link" href="{{route('datalaundrymember.index')}}">Data Laundry Member</a>
                <a class="nav-link" href="{{route('datalaundrynonmember.index')}}">Data Laundry Non-Member</a>
  
  

            </div>
          </div>
        </div>
    </nav>
    <br>
    <div class="container">
        
        <h1 class="mb-4">Daftar Pembelian Barang</h1>
        <a href="{{route('pembelianbarang.create')}}" class="btn btn-primary">Tambah Pembelian Barang</a><hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pembelianBarang as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->barang->nama_barang }}</td>
                    <td>{{ $item->pegawai->nama_pegawai }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td> 
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pembelianbarang.destroy', $item->id) }}" method="POST">
                            <a href="{{ route('pembelianbarang.edit', $item->id) }}" class="btn btn-sm btn-warning">Update</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
