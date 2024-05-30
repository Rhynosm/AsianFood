<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header('location:login.php');
    exit();
}

include 'koneksi.php';

// Query untuk mendapatkan jumlah data transaksi
$queryTransaksi = "SELECT COUNT(*) as jumlahTransaksi FROM tb_transaksi";
$resultTransaksi = mysqli_query($koneksi, $queryTransaksi);
$dataTransaksi = mysqli_fetch_assoc($resultTransaksi);
$jumlahTransaksi = $dataTransaksi['jumlahTransaksi'];

// Query untuk mendapatkan jumlah data kategori
$queryKategori = "SELECT COUNT(*) as jumlahKategori FROM tb_kategori";
$resultKategori = mysqli_query($koneksi, $queryKategori);
$dataKategori = mysqli_fetch_assoc($resultKategori);
$jumlahKategori = $dataKategori['jumlahKategori'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="assets/icon.png" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="admin.css">
    <title>AdminMarket</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bxs-window-alt"></i>
            <span class="logo_name">Asian Food Market</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="admin.php" class="active">
                    <i class="bx bxs-flag-checkered"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="kategori.php">
                    <i class="bx bxs-store-alt"></i>
                    <span class="links_name">Kategori</span>
                </a>
            </li>
            <li>
                <a href="transaksi.php">
                    <i class="bx bxs-wallet"></i>
                    <span class="links_name">Pembelian</span>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <i class="bx bxs-log-out-circle"></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
            </div>
            <div class="profile-details">
                <span class="admin_name">MarMin</span>
            </div>
        </nav>
        <div class="home-content">
            <h1>Welcome Back Marmin</h1>

            <div class="widgets" style="display: flex; gap: 20px;">
                <div class="widget" style="flex: 1; min-width: 200px; height: 150px; border: 2px solid #000; padding: 20px; border-radius: 10px;">
                    <div class="widget-content" style="display: flex; align-items: center; height: 100%;">
                        <i class="bx bxs-wallet widget-icon" style="font-size: 40px; margin-right: 20px;"></i>
                        <div class="widget-text">
                            <span class="widget-title" style="font-size: 20px;">Total Transaksi</span>
                            <span class="widget-value" style="font-size: 24px;"><?php echo $jumlahTransaksi; ?></span>
                        </div>
                    </div>
                </div>
                <div class="widget" style="flex: 1; min-width: 200px; height: 150px; border: 2px solid #000; padding: 20px; border-radius: 10px;">
                    <div class="widget-content" style="display: flex; align-items: center; height: 100%;">
                        <i class="bx bxs-store-alt widget-icon" style="font-size: 40px; margin-right: 20px;"></i>
                        <div class="widget-text">
                            <span class="widget-title" style="font-size: 20px;">Total Kategori</span>
                            <span class="widget-value" style="font-size: 24px;"><?php echo $jumlahKategori; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };
    </script>
</body>
</html>
