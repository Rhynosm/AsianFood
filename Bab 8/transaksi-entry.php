<?php
session_start();
if($_SESSION['username'] == null) {
    header('location:../login.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="logo.jpeg" />
    <link rel="stylesheet" href="kategori-entry.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Transaction Entry</title>
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
                <a href="transaction.php">
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
            <h3>Input Transaction</h3>
            <div class="form-login">
                <form action="transaksi-proses.php" method="post">
                    <label for="categories">Tanggal</label>
                    <input class="input" type="text" name="tanggal" id="tanggal" placeholder="Tanggal" />
                    <label for="price">Nama Produk</label>
                    <input class="input" type="text" name="nama_produk" id="namaproduk" placeholder="Nama Produk" />
                    <label for="description">Kategori</label>
                    <input class="input" type="text" name="kategori" id="kategori" placeholder="Kategori" />
                    <label for="region">Harga</label>
                    <input class="input" type="text" name="harga" id="harga" placeholder="Harga" />
                    <label for="region">Status</label>
                    <input class="input" type="text" name="status" id="status" placeholder="Status" />
                    <button type="submit" class="btn btn-simpan" name="simpan">
                        Simpan
                    </button>
                </form>
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
