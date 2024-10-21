<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$loginStatus = isset($_SESSION['login']) && $_SESSION['login'] === true;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Belanja</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>

    <!-- NAVBAR -->
   <?php include('navbar.php')
   ?>

    <!-- header -->
    <?php if ($loginStatus): ?>
    <header class="header">
        <p class="isiheader"><b>Selamat Datang <?php ($username)?>!</b></p>
        <p><b>Ayo Buat Daftar Belanja Kamu Sekarang</b></p>
    </header>
    <?php else: ?>   
    <header class="header">
        <p class="isiheader"><b>Selamat Datang!</b></p>
        <p><b>Ayo Login dan Buat Daftar Belanja Kamu Sekarang</b></p>
    </header>   
    <?php endif; ?>
    <!-- Content Home Page -->
    <section class="isi-beranda">
        <div class="content">
            <p><b>Belanja Teratur, Hemat Waktu dan Biaya 🛒</b><hr></p>
        </div>
        <div class="image1">
            <img src="assets/gambarbelanja.png" alt="gambarbelanja" width="100%">
        </div>
        <div class="isi-box">
            <p class="isiheader">Mengapa harus menggunakan daftar belanja?</p>
            <p>
                Dengan menggunakan website daftar belanja ini, kamu bisa mengelola belanja harian dengan lebih mudah dan efisien. Tidak perlu lagi khawatir melupakan kebutuhan penting.
            </p>
        </div>
        <div class="isi-box2">
            <p class="isiheader">Buat daftar belanja baru kapan saja dan sesuaikan dengan kebutuhan, dari belanja harian hingga persiapan acara besar, semua dalam satu tempat praktis!</p>
        </div>
    </section>

    <!-- Tentang Saya -->
    <section id="isi-box3">
        <p>Tentang Saya</p>
        <p>
            <b>Nama Lengkap:</b> Faizul Anwar Wandi <br>
            <b>Jenis Kelamin:</b> Laki-Laki <br>
            <b>Tempat, tanggal lahir:</b> Medan, 12 Desember 2004 <br>
            <b>Gol. Darah:</b> B <br>
            <b>Agama:</b> Islam <br>
            <b>Pekerjaan:</b> Mahasiswa <br>
            <b>Program Studi:</b> Informatika
        </p>
    </section>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="content-footer1">
            <a href="index.html">
                <p><b>Hubungi Kami (+62)823456</u></b></p> 
            </a>
            <a href="index.html">
                <p><b>Kebijakan Privasi</b></p>
            </a>
        </div>
        <div class="content-footer">
            <a href="index.html">
                <p><b>Ikuti Kami di <img src="assets/logoinstagram.png" alt="logo Instagram"></b></p>
            </a>
        </div>
    </footer>
    <script src="scripts/script.js"></script>
</body>
</html>

