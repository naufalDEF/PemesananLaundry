<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pembelian Barang</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Pembelian Barang</h1>
        <form action="{{ route('pembelianbarang.update', $pembelianBarang->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode_barang">Nama Barang</label>
                <select class="form-control" id="kode_barang" name="kode_barang">
                    @foreach ($barang as $item)
                        <option value="{{ $item->kode_barang }}" {{ $item->kode_barang == $pembelianBarang->kode_barang ? 'selected' : '' }}>{{ $item->nama_barang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_pegawai">Nama Pegawai</label>
                <select class="form-control" id="id_pegawai" name="id_pegawai">
                    @foreach ($pegawai as $person)
                        <option value="{{ $person->id }}" {{ $person->id == $pembelianBarang->id_pegawai ? 'selected' : '' }}>{{ $person->nama_pegawai }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $pembelianBarang->tanggal) }}" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ old('jumlah', $pembelianBarang->jumlah) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('pembelianbarang.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
