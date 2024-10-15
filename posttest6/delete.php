<?php 
    require 'koneksi.php';

    $id = $_GET['id'];
    $findQuery = mysqli_query($conn, "SELECT * FROM daftarbelanja WHERE id_item='$id'");
    $item = mysqli_fetch_assoc($findQuery);

    if ($item) {
        if (!empty($item['foto'])) {
            unlink('images/' . $item['foto']);
        }
        $query = "DELETE FROM daftarbelanja WHERE id_item = $id";
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
    } else {
        echo "
            <script>
                alert('Item tidak ditemukan');
                document.location.href = 'lihat_daftar.php';
            </script>
        ";
    }
?>

