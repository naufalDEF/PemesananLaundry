<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to LaundryOnlyONE</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        body {
            background-color: #f8f9fa; /* Background color */
            padding-top: 80px; /* Add padding-top to adjust for the fixed navbar */
        }
        .jumbotron {
            background-color: #17a2b8; /* Jumbotron background color */
            color: #fff; /* Text color */
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
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Beranda</a>
                    <a class="nav-link" href="{{ route('pegawai.index') }}">Pegawai</a>
                    <a class="nav-link" href="{{ route('member.index') }}">Membership</a>
                    <a class="nav-link" href="{{route('barang.index')}}">Harga</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="jumbotron text-center">
        <h1 class="display-4">Laundry Only ONE</h1>
        <p class="lead">Serahkan pakaian kotor anda ke kami</p>
    </div>

    <div class="container">
        <h2>Selamat datang di Laundry OnlyONE</h2>
        <p>Tempat terbaik untuk merawat pakaian Anda dengan penuh perhatian dan keahlian. Kami hadir untuk memberikan pengalaman pencucian pakaian yang tidak hanya memuaskan, tetapi juga menghadirkan kemudahan dan kenyamanan bagi Anda. Dengan staf profesional dan peralatan canggih, kami berkomitmen untuk memberikan hasil yang bersih, harum, dan terawat untuk setiap jenis pakaian Anda.</p>
        
        <h3>Komitmen Kami</h3>
        <ul>
            <li>Menyediakan layanan pencucian pakaian yang berkualitas tinggi</li>
            <li>Memastikan kebersihan dan kesegaran pakaian Anda</li>
            <li>Memberikan pengalaman pencucian yang cepat, efisien, dan handal</li>
            <li>Menjaga keamanan dan keamanan pakaian Anda selama proses pencucian</li>
        </ul>
        
        <p>Di Laundry OnlyONE, kami mengerti betapa berharganya waktu Anda. Itulah mengapa kami menawarkan layanan cuci, setrika, dan dry cleaning yang cepat, efisien, dan handal. Tak perlu lagi khawatir tentang noda membandel atau kerusakan pada pakaian kesayangan Anda. Percayakan kepada kami, dan nikmati kebebasan untuk fokus pada hal-hal yang benar-benar penting dalam hidup Anda. Laundry OnlyONE, tempat di mana kebersihan dan kenyamanan bertemu dalam satu langkah.</p>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
