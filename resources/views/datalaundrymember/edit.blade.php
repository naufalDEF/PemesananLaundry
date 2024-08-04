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
        <h1>Edit Data Laundry Member</h1>
        <form action="{{ route('datalaundrymember.update', $datalaundryMember->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tgl_transaksi">Tanggal Transaksi:</label>
                <input type="date" class="form-control" id="tgl_transaksi" name="tgl_transaksi" value="{{ old('tgl_transaksi', $datalaundryMember->tgl_transaksi) }}" required>
            </div>
            <div class="form-group">
                <label for="member_id">Nama Member:</label>
                <select class="form-control" id="member_id" name="member_id">
                    @foreach ($members as $member)
                        <option value="{{ $member->id }}" {{ $member->id == $datalaundryMember->member_id ? 'selected' : '' }}>{{ $member->nama_member }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="id_pegawai">Nama Pegawai:</label>
                <select class="form-control" id="id_pegawai" name="id_pegawai">
                    @foreach ($pegawai as $person)
                        <option value="{{ $person->id }}" {{ $person->id == $datalaundryMember->id_pegawai ? 'selected' : '' }}>{{ $person->nama_pegawai }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan:</label>
                <textarea class="form-control" id="keterangan" name="keterangan" required>{{ old('keterangan', $datalaundryMember->keterangan) }}</textarea>
            </div>
            <div class="form-group">
                <label for="status_laundry">Status Laundry:</label>
                <select class="form-control" id="status_laundry" name="status_laundry">
                    <option value="menunggu" {{ $datalaundryMember->status_laundry == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
                    <option value="diproses" {{ $datalaundryMember->status_laundry == 'diproses' ? 'selected' : '' }}>Diproses</option>
                    <option value="selesai" {{ $datalaundryMember->status_laundry == 'selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status_pembayaran">Status Pembayaran:</label>
                <select class="form-control" id="status_pembayaran" name="status_pembayaran">
                    <option value="bayar" {{ $datalaundryMember->status_pembayaran == 'bayar' ? 'selected' : '' }}>Bayar</option>
                    <option value="belum" {{ $datalaundryMember->status_pembayaran == 'belum' ? 'selected' : '' }}>Belum</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lokasi_kirim">Lokasi Kirim:</label>
                <textarea class="form-control" id="lokasi_kirim" name="lokasi_kirim" required>{{ old('lokasi_kirim', $datalaundryMember->lokasi_kirim) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('datalaundrymember.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
