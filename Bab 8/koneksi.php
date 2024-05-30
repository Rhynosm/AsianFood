<?php 

$servername = 'localhost';
$username = 'root';
$password = ''; // dikosongkan karena tidak menggunakan password
$database = 'db_asianfood';

// Membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// Mengecek koneksi
if(!$koneksi) {
    die('Connection Failed: ' . mysqli_connect_error());
}
?>
