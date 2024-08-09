<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diary - Website Sri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        
        .center-content {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin-top: -10px;
        }

        body {
            background-image: url('/images/pola_background2.jpg');
            background-size: cover;
            background-repeat: no-repeat; 
        }

        .diary-card {
            margin-bottom: 20px;
        }

        .navbar-nav .nav-item.active a {
        color: #fff;
        font-weight: bold;
        }

        .diary-title {
        margin-bottom: 5px;
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('/') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('profil-mahasiswa') ?>">Profil Mahasiswa</a>
                    </li>
                    <li class="nav-item active">
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
    <h1 class="diary-title" style="padding-top: 20px;">My Diary</h1>
        <div class="center-content">
            <div class="row">
                <div class="col-12 diary-card">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Senin, 20 November 2023</h5>
                            <p class="card-text">“Dear diary, ini bukan sebuah cerita. ini hanya sebuah kata kata kutipan yang di ambil dari peristiwa kehidupan”</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 diary-card">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Minggu, 19 November 2023</h5>
                            <p class="card-text">“Untuk menggapai impian butuh tenaga, untuk melewati rintangan butuh lebih dari sekedar tenaga, yaitu tekad,kerja keras dan doa yang kuat”</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 diary-card">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sabtu, 18 November 2023</h5>
                            <p class="card-text">“Mengapa rindu mu tetap terngiang disini Membuatku gagal untuk beradaptasi Padahal aku sudah berusaha untuk mengerti Bahwa dirimu takkan mungkin bisa kumiliki”</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 diary-card">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Jumat, 17 November 2023</h5>
                            <p class="card-text">“Berhenti menangisi orang yang meninggalkan mu. buatlah ia merasa menyesal dengan mengukir kembali senyuman itu di wajah manismu”</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 diary-card">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kamis, 16 November 2023</h5>
                            <p class="card-text">“Tau apa aku tentang kehidupan, Sedangkan yang baru ku mengerti hanyalah merah putih,biru dan abu abu”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
