<?php
  require 'koneksi.php';

  $query = "SELECT *FROM daftarbelanja";
  
  $result = mysqli_query($conn, $query);

  $daftar = [];
  while($row = mysqli_fetch_assoc($result)){
      $daftar[] = $row;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Belanja</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/lihat.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
     <!-- navbar -->
     <?php include("navbar.php") ?>
    <div class="container">
        <h1 class="title">Daftar Belanja Kamu</h1>
        <table class="shopping-table">
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach($daftar as $daftarbelanja): ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $daftarbelanja['nama_item'] ?></td>
                    <td><?php echo $daftarbelanja['jumlah_item'] ?></td>
                    <td><?php echo $daftarbelanja['keterangan'] ?></td>
                    <td><img src="images/<?php echo $daftarbelanja['foto'] ?>" width = "90px" height = "100px" style = "display:block; margin:0 auto">
                    </td>
                    <td class="actions">
                        <a href = "update.php?id=<?php echo $daftarbelanja['id_item']?>" button class="update-btn"><i class="fas fa-edit"></i></button>
                        </a>
                        <a href = "delete.php?id=<?php echo $daftarbelanja['id_item']?>" onclick = "return confirm('Yakin untuk menghapus daftar ini?')">
                        <button class="delete-btn"><i class="fas fa-trash-alt"></i></button>
                        </a>
                    </td>
                </tr>
                <?php $i++; endforeach ?>
            </tbody>
        </table>
    </div>
    <script src="scripts/script.js"></script>
</body>
</html>
