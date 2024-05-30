<?php
include 'koneksi.php';

if(isset($_POST['simpan'])) {
    $tanggal= $_POST['tanggal'];
    $namaproduk = $_POST['nama_produk'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];

    if(empty($tanggal) || empty($namaproduk) || empty($kategori) || empty($harga) || empty($status)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'transaksi-entry.php';
            </script>
        ";
    } else {
        $sql = "INSERT INTO tb_transaksi(tanggal, nama_produk, kategori, harga, status) VALUES ('$tanggal', '$namaproduk', '$kategori', '$kategori', '$status')";
        if(mysqli_query($koneksi, $sql)) {
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    window.location = 'transaksi.php'
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Terjadi Kesalahan');
                    window.location = 'transaksi-entry.php'
                </script>
            ";
        }
    }
} elseif(isset($_POST['Edit'])) {
    $id = $_POST['ID'];
    $tanggal= $_POST['tanggal'];
    $namaproduk = $_POST['nama_produk'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $status = $_POST['status'];
    $sql = "UPDATE tb_transaksi SET 
            tanggal = '$tanggal',
            nama_produk = '$namaproduk',
            kategori = '$kategori',
            harga = '$harga',
            status = '$status'
            WHERE ID = $id";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                window.location = 'transaksi.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'transaksi-edit.php';
            </script>
        ";
    }
} elseif(isset($_POST['hapus'])) {
    $id = $_POST['ID'];

    $sql = "DELETE FROM tb_transaksi WHERE ID = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                window.location = 'transakasi.php';
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
} else {
    header('location: transaksi.php');
}
