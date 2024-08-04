<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Laundry Member</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
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
        <h1>Data Laundry Member</h1>
        <form action="{{ route('datalaundrymember.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tgl_transaksi">Tanggal Transaksi:</label>
                <input type="date" class="form-control" id="tgl_transaksi" name="tgl_transaksi" required>
            </div>
            <div class="form-group">
                <label for="member_id">Nama Member:</label>
                <select class="form-control" id="member_id" name="member_id">
                    @foreach ($members as $member)
                        <option value="{{ $member->id }}">{{ $member->nama_member }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_pegawai">Nama Pegawai:</label>
                <select class="form-control" id="id_pegawai" name="id_pegawai">
                    @foreach ($pegawai as $person)
                        <option value="{{ $person->id }}">{{ $person->nama_pegawai }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <textarea class="form-control" id="keterangan" name="keterangan" required></textarea>
            </div>
            <div class="form-group">
                <label for="status_laundry">Status Laundry:</label>
                <select class="form-control" id="status_laundry" name="status_laundry">
                    <option value="menunggu">Menunggu</option>
                    <option value="diproses">Diproses</option>
                    <option value="selesai">Selesai</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status_pembayaran">Status Pembayaran:</label>
                <select class="form-control" id="status_pembayaran" name="status_pembayaran">
                    <option value="bayar">Bayar</option>
                    <option value="belum">Belum</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lokasi_kirim">Lokasi Kirim:</label>
                <textarea class="form-control" id="lokasi_kirim" name="lokasi_kirim" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ route('datalaundrymember.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
