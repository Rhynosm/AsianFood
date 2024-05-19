<?php
include 'koneksi.php';

if(isset($_POST['simpan'])) {
    $region = $_POST['region'];
    $categories = $_POST['categories'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    if(empty($region) || empty($categories) || empty($price) || empty($description)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'kategori-entry.php';
            </script>
        ";
    } else {
        $sql = "INSERT INTO tb_kategori (region, kategori, harga, description) VALUES ('$region', '$categories', '$price', '$description')";
        if(mysqli_query($koneksi, $sql)) {
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    window.location = 'kategori.php'
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Terjadi Kesalahan');
                    window.location = 'kategori-entry.php'
                </script>
            ";
        }
    }
} elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $region = $_POST['region'];
    $categories = $_POST['categories'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "UPDATE tb_kategori SET 
            region = '$region',
            kategori = '$categories',
            harga = '$price',
            description = '$description'
            WHERE id = $id";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Diubah');
                window.location = 'kategori.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'kategori-edit.php';
            </script>
        ";
    }
} elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM tb_kategori WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                window.location = 'kategori.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Dihapus');
                window.location = 'kategori.php';
            </script>
        ";
    }
} else {
    header('location: kategori.php');
}
