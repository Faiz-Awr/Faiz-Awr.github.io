<?php 
    require 'koneksi.php';
    date_default_timezone_set("ASIA/MAKASSAR");
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
        $oldimg = $_POST['oldimg'];

        $new_file_name = $oldimg;

        if ($_FILES['foto']['error'] !== 4) {
            $tmp_name = $_FILES['foto']['tmp_name'];
            $file_name = $_FILES['foto']['name'];
            $file_size = $_FILES['foto']['size']; 

            $validExtensions = ['jpg', 'jpeg', 'png', 'webp', 'svg', 'gif', 'bmp', 'tiff'];
            $fileExtension = explode('.', $file_name);
            $fileExtension = strtolower(end($fileExtension));
            
            $maxFileSize = 2097152;

            if (!in_array($fileExtension, $validExtensions)) {
                echo "<script>
                alert('Tolong upload file gambar yang valid');
                </script>";
            } elseif ($file_size > $maxFileSize) {
                echo "<script>
                alert('Ukuran file terlalu besar, maksimal 2 MB');
                </script>";
            } else {
                $new_file_name = date('Y-m-d H.i.s') . '.' . $fileExtension;
                move_uploaded_file($tmp_name, 'images/' . $new_file_name);
                unlink('images/' . $oldimg); 
            }
        }

        $query = "UPDATE daftarbelanja SET nama_item='$nama', jumlah_item='$jumlah', keterangan='$keterangan', foto='$new_file_name' WHERE id_item=$id";
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
                    alert('Gagal mengubah daftar belanja');
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
    <!-- <link rel="stylesheet" href="styles/login.css"> -->
    <!-- <link rel="stylesheet" href="styles/tambah.css"> -->
    <link rel="stylesheet" href="styles/edit.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>
     <!-- navbar -->
     <?php include("navbar.php") ?>

    <div class="container">
        <div class="box">
        <h1 class="title">Daftar Belanja</h1>
        <form class="shopping-form" action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="oldimg" value="<?php echo $item['foto'] ?>">

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
                <textarea id="keterangan-item" name="keterangan" rows="3" placeholder="Masukkan keterangan item"><?php echo $item['keterangan']; ?></textarea>
            </div>
            <div class="form-group" style="border: 1px solid rgba(0,0,0,0.6); border-radius: 9px; padding: 7px 10px; font-size:16px">
                <label for="foto">Foto (opsional):</label>
                <input type="file", name="foto" id="foto">
                <br>
                <img src="images/<?php echo $item['foto']?>" alt="<?php echo $item['foto']?>" width="90px" height = "100px">
            </div>
            <button type="submit" name = "ubah" value = "ubah" class="submit-btn">Ubah</button>
        </form>
        </div>
    </div>
    <script src="scripts/script.js"></script>
</body>
</html>
