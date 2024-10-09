<?php 
    require 'koneksi.php';

    $id = $_GET['id'];

        $query = "DELETE FROM daftarbelanja WHERE id_item =$id";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "
                <script>
                    alert('Berhasil menghapus item');
                    document.location.href = 'lihat_daftar.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Gagal menghapus item!');
                    document.location.href = 'lihat_daftar.php';
                </script>
            ";
        }       
?>
