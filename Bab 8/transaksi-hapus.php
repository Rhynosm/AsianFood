<?php
session_start();
if ($_SESSION['username'] == null) {
    header('location:../login.php');
}
include 'koneksi.php';

$id = $_GET['ID'];
$sql = "DELETE FROM tb_transaksi WHERE ID = $id";

if (mysqli_query($koneksi, $sql)) {
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            window.location = 'transaksi.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data Gagal Dihapus');
            window.location = 'transaksi.php';
        </script>
    ";
}
?>
