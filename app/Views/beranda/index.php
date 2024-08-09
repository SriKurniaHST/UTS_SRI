<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Beranda - Website Sri</title>
    <!-- Panggil stylesheet Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-nav .nav-item.active a {
            color: #fff;
            font-weight: bold;
        }

        body {
            background-image: url('/images/pola_background.jpg'); 
            background-size: cover; 
            background-repeat: no-repeat;
        }

        /* Style untuk card */
        .custom-card {
            margin-top:35vh; /* Atur margin atas agar card berada di tengah-tengah */
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= site_url('/') ?>">Website Sri</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('/') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('profil-mahasiswa') ?>">Profil Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('diary') ?>">Diary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('kuliah') ?>">Kuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('kontak') ?>">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card custom-card">
                    <div class="card-body text-center">
                        <h1>Selamat Datang di Website Saya</h1>
                        <hr>
                        <marquee><p>Silahkan jelajahi website saya untuk mengetahui tentang diri saya lebih jauh.</p></marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Panggil script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
