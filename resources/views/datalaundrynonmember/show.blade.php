<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Laundry Non-Member</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Detail Data Laundry Non-Member</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tanggal Transaksi: {{ $datalaundryNonMember->tgl_transaksi }}</h5>
                <p class="card-text">Nama Customer: {{ $datalaundryNonMember->nama_customer }}</p>
                <p class="card-text">Alamat: {{ $datalaundryNonMember->alamat }}</p>
                <p class="card-text">No. Telepon: {{ $datalaundryNonMember->no_telp }}</p>
                <p class="card-text">Nama Pegawai: {{ $datalaundryNonMember->pegawai->nama_pegawai }}</p>
                <p class="card-text">Keterangan: {{ $datalaundryNonMember->keterangan }}</p>
                <p class="card-text">Status Laundry: {{ $datalaundryNonMember->status_laundry }}</p>
                <p class="card-text">Status Pembayaran: {{ $datalaundryNonMember->status_pembayaran }}</p>
                <p class="card-text">Lokasi Kirim: {{ $datalaundryNonMember->lokasi_kirim }}</p>
            </div>
        </div>
        <br>
        <a href="{{ route('datalaundrynonmember.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
