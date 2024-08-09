<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pengalaman Kuliah - Ilmu Komputer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         body {
            background-image: url('/images/pola_background3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
         }
        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .experience {
            margin-bottom: 20px;
            background-color: white;
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
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url('kuliah') ?>">Kuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('kontak') ?>">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        <h1>Pengalaman Kuliah - Ilmu Komputer</h1>
        <br>

        <div class="card experience">
            <div class="card-body">
                <h4 class="card-title">Semester 1</h4>
                <p class="card-text">Pada semester 1 saya memulai perjalanan saya melakukan perkuliahan di Institut Teknologi Sapta, disini saya mengenal teman teman baru, meski secara virtual dikarenakan saya mulai kuliah di era Covid melanda, jadi perkuliahan di laksanakan secara online, dan  dan mulai memasuki dunia komputer yang sebelumnya terasa asing bagi saya
                </p>
            </div>
        </div>

        <div class="card experience">
            <div class="card-body">
                <h4 class="card-title">Semester 2</h4>
                <p class="card-text">Ketika memasuki semester 2 saya, pengetahuan saya di bidang komputer mulai membaik, saya mendapatkan ilmu baru dari dosen yang mengajari saya, sehingga mulai bisa memahami apa yang sebelumnya tidak saya pahami</p>
            </div>
        </div>


       <div class="card experience">
            <div class="card-body">
                <h4 class="card-title">Semester 3</h4>
                <p class="card-text">Semester 3 kurang lebih sama dengan semester sebelumnya, tugas yang mulai menumpuk, dan tekanan pekerjaan semakin berat, namun saya tetap menjalani kedua dengan sepenuh hati, dan dapat melalui semester ini dengan baik</p>
            </div>
        </div>

        <div class="card experience">
            <div class="card-body">
                <h4 class="card-title">Semester 4</h4>
                <p class="card-text">Akhirnya wabah Covid-19 jauh berkurang dan perkuliahan dapat dilakukan secara tatap muka, saya akhirnya dapat mengenal teman teman saya yang sebelumnya hanya ditemui secara virtual, ini merupakan pengalaman yang menarik karena saya dapat mengenal mereka, dan dapat melaksanakan tugas secara bersama sama</p>
            </div>
        </div>

        <div class="card experience">
            <div class="card-body">
                <h4 class="card-title">Semester 5</h4>
                <p class="card-text">Ada hal yang cukup menyedihkan pada semester ini karena teman teman saya yang sebelumnya berada satu kelas dengan saya, kini harus berpisah dikarenakan perbedaan pendidikan yang tempuh, beberapa teman saya menempuh pendidikan D3 sedangkan saya S1, oleh karena itu kelas kami pun terpisah, namun ini tidak menyurutkan semangat saya dalam menuntut ilmu </p>
            </div>
        </div>

        <div class="card experience">
            <div class="card-body">
                <h4 class="card-title">Semester 6</h4>
                <p class="card-text">Intensitas frekuensi tugas perkuliahan mulai menurun, akan tetapi kesulitan tugas yang saya dapat pada semester ini mulai sulit dan membuat saya kesusahan. namun saya akan tetap terus belajar dan belajar untuk menutupi kekurangan saya, selain itu akhir dari perkuliahan juga semakin dekat, sehingga saya harus lebih meningkatkan lagi keahlian saya di bidang yang saya tempuh</p>
            </div>
        </div>

        <div class="card experience">
            <div class="card-body">
                <h4 class="card-title">Semester 7</h4>
                <p class="card-text">. . . Still in process</p>
            </div>
        </div>
        

        <img src="/images/itsm.jpeg" alt="ITS Mandiri" class="img-fluid mt-4" style="max-width: 100%;">
    </div>

</body>
</html>
