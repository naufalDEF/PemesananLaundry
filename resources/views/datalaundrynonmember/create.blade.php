<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Laundry Non-Member</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }
        .container {
            margin-top: 50px;
            margin-bottom: 50px; 
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Tambah Data Laundry Non-Member</h1>
        <form action="{{ route('datalaundrynonmember.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tgl_transaksi">Tanggal Transaksi</label>
                <input type="date" class="form-control" id="tgl_transaksi" name="tgl_transaksi" required>
            </div>
            <div class="form-group">
                <label for="nama_customer">Nama Customer</label>
                <input type="text" class="form-control" id="nama_customer" name="nama_customer" maxlength="150" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="no_telp">No. Telepon</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" maxlength="16" required>
            </div>
            <div class="form-group">
                <label for="id_pegawai">Nama Pegawai</label>
                <select class="form-control" id="id_pegawai" name="id_pegawai" required>
                    @foreach ($pegawai as $person)
                        <option value="{{ $person->id }}">{{ $person->nama_pegawai }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="status_laundry">Status Laundry</label>
                <select class="form-control" id="status_laundry" name="status_laundry" required>
                    <option value="menunggu">Menunggu</option>
                    <option value="diproses">Diproses</option>
                    <option value="selesai">Selesai</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status_pembayaran">Status Pembayaran</label>
                <select class="form-control" id="status_pembayaran" name="status_pembayaran" required>
                    <option value="bayar">Bayar</option>
                    <option value="belum">Belum</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lokasi_kirim">Lokasi Kirim</label>
                <textarea class="form-control" id="lokasi_kirim" name="lokasi_kirim" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ route('datalaundrynonmember.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
