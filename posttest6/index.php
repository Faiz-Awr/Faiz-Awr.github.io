<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Belanja</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/login.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>

    <!-- NAVBAR -->
    <nav>
        <div class="">
            <img src="assets/logodinavbar.png" alt="logodaftarbelanja">
        </div>
        <div id="menu-icon" class="menu-icon">
            <i class="ph ph-list"></i>
        </div>
        <ul id="menu-list" class="hidden">
            <li><a href="#">Beranda</a></li>
            <li><a href="tambah.php">Buat Daftar Belanja</a></li>
            <li><a href="lihat_daftar.php">Lihat Daftar Belanja</a></li>
            <li id="tentang-saya"><a href="#isi-box3">Tentang Saya</a></li>
            <li>
                <button id="theme-switch">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                        <path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Z"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                        <path d="M480-280q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Z"/>
                    </svg>
                </button>
            </li>
        </ul>
    </nav>

    <!-- header -->
    <header class="header">
        <p class="isiheader"><b>Selamat Datang!</b></p>
        <p><b>Ayo Buat Daftar Belanja Kamu Sekarang</b></p>
    </header>   

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

