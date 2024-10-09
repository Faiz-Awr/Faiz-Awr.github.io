<?php 
    require 'koneksi.php';

    $id = $_GET['id'];
    $query = "SELECT * FROM daftarbelanja WHERE id_item = $id";
    $result = mysqli_query($conn, $query);
    
    $item = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $item[] = $row;
    }

    $item = $item[0];

    if (isset($_POST['ubah'])) {
        $nama = $_POST['nama'];
        $jumlah = $_POST['jumlah'];
        $keterangan = $_POST['keterangan'];

        $query = "UPDATE daftarbelanja SET nama_item='$nama', jumlah_item='$jumlah', keterangan='$keterangan' WHERE id_item=$id";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "
                <script>
                    alert('Berhasil mengubah daftar belanja!');
                    document.location.href = 'lihat_daftar.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Gagal mengubah dafar belanja');
                    document.location.href = 'lihat_daftar.php';
                </script>
            ";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Daftar Belanja</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/tambah.css">
    <link rel="stylesheet" href="styles/lihat.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>
     <!-- navbar -->
     <?php include("navbar.php") ?>
    <div class="container">
        <h1 class="title">Daftar Belanja</h1>
        <form class="shopping-form" action="" method="POST">
            <div class="form-group">
                <label for="nama-item">Nama Item:</label>
                <input type="text" id="nama-item" name="nama" placeholder="Masukkan nama item" value="<?php echo $item['nama_item'] ?>" required>
            </div>
            <div class="form-group">
                <label for="jumlah-item">Jumlah Item:</label>
                <input type="number" id="jumlah-item" name="jumlah" placeholder="Masukkan jumlah item"  value="<?php echo $item['jumlah_item'] ?>"required>
            </div>
            <div class="form-group">
                <label for="keterangan-item">Keterangan:</label>
                <textarea id="keterangan-item" name="keterangan" rows="3" placeholder="Masukkan keterangan item"  value="<?php echo $item['keterangan'] ?>"></textarea>
            </div>
            <button type="submit" name = "ubah" value = "ubah" class="submit-btn">Ubah</button>
        </form>
    </div>
</body>
</html>