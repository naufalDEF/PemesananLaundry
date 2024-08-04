<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Data Laundry Member</title>
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
            <a class="navbar-brand" href="{{ route('home') }}">LaundryOnlyONE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Beranda</a>
                    <a class="nav-link" href="{{ route('pegawai.index') }}">Pegawai</a>
                    <a class="nav-link" href="{{ route('member.index') }}">Membership</a>
                    <a class="nav-link" href="{{ route('barang.index') }}">Barang</a>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <h1 class="mb-4">Detail Data Laundry Member</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tanggal Transaksi: {{ $datalaundryMember->tgl_transaksi }}</h5>
                <p class="card-text"><strong>Nama Member:</strong> {{ $datalaundryMember->member->nama_member }}</p>
                <p class="card-text"><strong>Nama Pegawai:</strong> {{ $datalaundryMember->pegawai->nama_pegawai }}</p>
                <p class="card-text"><strong>Keterangan:</strong> {{ $datalaundryMember->keterangan }}</p>
                <p class="card-text"><strong>Status Laundry:</strong> {{ $datalaundryMember->status_laundry }}</p>
                <p class="card-text"><strong>Status Pembayaran:</strong> {{ $datalaundryMember->status_pembayaran }}</p>
                <p class="card-text"><strong>Lokasi Kirim:</strong> {{ $datalaundryMember->lokasi_kirim }}</p>
            </div>
        </div><br>
        <a href="{{ route('datalaundrymember.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
