<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kontak - Website Sri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-image: url('/images/pola_background1.jpg'); 
            background-size: cover; 
            background-repeat: no-repeat;
        }

        .contact-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .contact-card {
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 8px;
            text-align: center;
            background-color: white;
        }
        .contact-title {
            margin-bottom: 20px;
        }
        .contact-icons {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .contact-icon {
            font-size: 30px;
            margin: 10px;
        }
        .no-underline {
            text-decoration: none;
        }
        
        .navbar-nav .nav-item.active a {
        color: #fff;
        font-weight: bold;
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('diary') ?>">Diary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('kuliah') ?>">Kuliah</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('kontak') ?>">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="contact-container">
        <div class="contact-card">
            <h1 class="contact-title">Kontak Saya</h1>
            <hr>
            <p>Anda dapat menghubungi saya melalui platform berikut:</p>
            <div class="contact-icons">
            
                <a href="https://wa.me/+6281952514778" target="_blank" class="contact-icon no-underline">
                    <i class="fab fa-whatsapp"></i> 081952514778
                </a>
              
                <a href="https://www.instagram.com/_srikrnia" target="_blank" class="contact-icon no-underline">
                    <i class="fab fa-instagram"></i> _srikrnia
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

</body>
</html>
