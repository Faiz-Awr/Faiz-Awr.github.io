<?php 
require 'koneksi.php';
date_default_timezone_set("ASIA/MAKASSAR");
if(isset($_POST['tambah'])){
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $keterangan = $_POST['keterangan'];

    $tmp_name = $_FILES['foto']['tmp_name'];
    $file_name = $_FILES['foto']['name'];

    $validExtensions = ['jpg', 'jpeg', 'png', 'webp', 'svg', 'gif', 'bmp', 'tiff'];
    $fileExtension = explode('.', $file_name);
    $fileExtension = strtolower(end($fileExtension));
    
    if(!in_array($fileExtension, $validExtensions)){
        echo "<script>
        alert('Tolong upload file gambar')
        </script>";
    }else{
        $new_file_name = date('Y-m-d H.i.s'). '.' . $fileExtension;

        if(move_uploaded_file($tmp_name, 'images/' . $new_file_name)){
            $query = "INSERT INTO daftarbelanja VALUES('', '$nama', '$jumlah', '$keterangan', '$new_file_name')";
            $result = mysqli_query($conn, $query);

            if($result){
                echo "
                <script>
                    alert('Berhasil menambah Item!');
                    document.location.href = 'lihat_daftar.php';
                </script>
            ";
            }else{
                echo "
                <script>
                    alert('Gagal menambah Item!');
                    document.location.href = 'lihat_daftar.php';
                </script>
            ";
            }
        }
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
    <!-- <link rel="stylesheet" href="styles/tambah.css"> -->
    <link rel="stylesheet" href="styles/tambahform.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>
     <?php include("navbar.php") ?>
     
    <div class = "container">
        <div class = "box">
        <h1 class="title">Daftar Belanja</h1>
        <form class="shopping-form" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama-item">Nama Item:</label>
                <input type="text" id="nama-item" name="nama" placeholder="Masukkan nama item" required>
            </div>
            <div class="form-group">
                <label for="jumlah-item">Jumlah Item:</label>
                <input type="number" id="jumlah-item" name="jumlah" placeholder="Masukkan jumlah item" min = "1" required>
            </div>
            <div class="form-group">
                <label for="keterangan-item">Keterangan:</label>
                <textarea id="keterangan-item" name="keterangan" rows="3" placeholder="Masukkan keterangan item"></textarea>
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file", name="foto" id="foto">
            </div>
            <button type="submit" name = "tambah" class="submit-btn">Tambah Item</button>
        </form>
        </div>
    </div>
    <script src="scripts/script.js"></script>
</body>
</html>