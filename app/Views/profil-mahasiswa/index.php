<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profil Mahasiswa - Website Sri</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('/images/pola_background4.jpg'); 
            background-size: cover; 
            background-repeat: no-repeat; 
        }

        .center-content {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        
        .profile-card {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
            background-color: white;
        }
        .profile-image {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 15px;
        }
        .profile-image img {
            width: 100%;
            height: auto;
            display: block;
            margin: 0 auto; 
        }
        .navbar-nav .nav-item.active a {
        color: #fff;
        font-weight: bold;
        }
        .profile-card p {
            text-align: left;
            margin-left: 0;
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
                    <li class="nav-item active">
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
        <div class="center-content">
            <div class="profile-card">
            <h1>Profil Saya</h1><hr>
                <div class="profile-image">
                    <img src="<?= base_url('images/foto_sri.jpg') ?>" alt="Foto Mahasiswa Sri" width="200" height="200">
                </div>
                <br>
                <h2><b>Sri Kurnia</b></h2>
                <hr>
                <p><b>Alamat:</b> Mandingin</p>
                <p><b>Jurusan:</b> Ilmu Komputer</p>
                <p><b>Agama :</b> Islam</p>
                <p><b>Motto Hidup:</b> Jadilah insan yang berguna untuk semua orang</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
