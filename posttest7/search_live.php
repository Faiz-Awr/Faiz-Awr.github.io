<?php
require 'koneksi.php';

if (isset($_GET['keyword'])) {
    $search = $_GET['keyword'];
    $sql = "SELECT * FROM daftarbelanja WHERE nama_item LIKE '%$search%' OR jumlah_item LIKE '%$search%' OR keterangan LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            $foto = $row['foto'] ? $row['foto'] : 'default.png';

            echo "
            <tr>
                <td>$i</td>
                <td>{$row['nama_item']}</td>
                <td>{$row['jumlah_item']}</td>
                <td>{$row['keterangan']}</td>
                <td><img src='images/{$foto}' width='90px' height='100px' style='display:block; margin:0 auto'></td>
                <td class='actions'>
                    <a href='update.php?id={$row['id_item']}' class='update-btn'><i class='fas fa-edit'></i></a>
                    <a href='delete.php?id={$row['id_item']}' onclick='return confirm(\"Yakin untuk menghapus daftar ini?\")'>
                        <button class='delete-btn'><i class='fas fa-trash-alt'></i></button>
                    </a>
                </td>
            </tr>";
            $i++;
        }
    } else {
        echo "<tr><td colspan='6'>Tidak ada hasil yang ditemukan.</td></tr>";
    }
}
?>
