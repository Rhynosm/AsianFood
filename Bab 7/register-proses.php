<?php 
include 'koneksi.php';

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    if(empty($email) || empty($username) || empty($password)) {
        echo "
            <script>
                alert('ISIKAN DATA ANDA TERLEBIH DAHULU');
                window.location = 'register.php';
            </script>
        ";
    } else {
        $sql = "INSERT INTO tb_admin (email, password, username) VALUES('$email', '$password', '$username')";
        if(mysqli_query($koneksi, $sql)) {
            echo "
                <script>
                    alert('AKUN ANDA SUDAH TERDAFTAR SILAHKAN LOGIN');
                    window.location = 'login.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('TERJADI KESALAHAN');
                    window.location = 'register.php';
                </script>
            ";
        }
    }
}
?>
