<?php
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] !== true){
    echo "<script>
    alert('Kamu harus login dulu sebelum melihat');
    document.location.href = 'login.php';
    </script>";
}
require 'koneksi.php';

$query = "SELECT *FROM daftarbelanja";

$result = mysqli_query($conn, $query);

$daftar = [];
while($row = mysqli_fetch_assoc($result)){
    $daftar[] = $row;
}

if (isset($_GET['search'])) {
    $search = $_GET['keyword'];
    $sql = mysqli_query($conn, "SELECT * FROM daftarbelanja WHERE nama_item LIKE '%$search%' OR
      jumlah_item LIKE '%$search%' OR keterangan LIKE '%$search%'");
    $daftar = [];
    while ($row = mysqli_fetch_assoc($sql)) {
      $daftar[] = $row;
    }
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <!-- navbar -->
    <?php include("navbar.php") ?>
    <search class="container-search">
        <form action="" method="GET" class="search">
            <input type="text" name="keyword" id="search" placeholder="Cari Daftar Belanja kamu di sini" class="search-daftar" />
            <button type="submit" name="search" class="search-button">
                <i class="fa-solid fa-magnifying-glass fa-xl"></i>
            </button>
        </form>
    </search>


    <div class="container">
  <h1 class="title">Daftar Belanja Kamu</h1>
  <div id="search-results">
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
      <tbody id="result-data">
        <?php $i = 1; foreach($daftar as $daftarbelanja): ?>
        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $daftarbelanja['nama_item'] ?></td>
          <td><?php echo $daftarbelanja['jumlah_item'] ?></td>
          <td><?php echo $daftarbelanja['keterangan'] ?></td>
          <td>
          <?php if($daftarbelanja['foto']): ?>
                <img src="images/<?php echo $daftarbelanja['foto'] ?>" width="90px" height="100px" style="display:block; margin:0 auto">
            <?php else: ?>
                <img src="images/default.png" width="90px" height="100px" style="display:block; margin:0 auto">
            <?php endif; ?></td>
          <td class="actions">
            <a href="update.php?id=<?php echo $daftarbelanja['id_item']?>" button class="update-btn"><i class="fas fa-edit"></i></button></a>
            <a href="delete.php?id=<?php echo $daftarbelanja['id_item']?>" onclick="return confirm('Yakin untuk menghapus daftar ini?')">
              <button class="delete-btn"><i class="fas fa-trash-alt"></i></button>
            </a>
          </td>
        </tr>
        <?php $i++; endforeach ?>
      </tbody>
    </table>
  </div>
</div>
    <script src="scripts/script.js"></script>
    <script src="scripts/search.js"></script>
</body>

</html>