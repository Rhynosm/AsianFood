<?php 
session_start();
if($_SESSION['username'] == null) {
    header('location:../login.php');
}
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM tb_kategori WHERE id = $id";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="logo.jpeg" />
    <link rel="stylesheet" href="kategori-entry.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catshop Admin | Edit Category</title>
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
            <h3>Edit Category</h3>
            <div class="form-login">
                <form action="kategori-proses.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <label for="categories">Categories</label>
                    <input class="input" type="text" name="categories" id="categories" value="<?php echo $data['kategori']; ?>" />
                    <label for="price">Price</label>
                    <input class="input" type="text" name="price" id="price" value="<?php echo $data['harga']; ?>" />
                    <label for="description">Name</label>
                    <input class="input" type="text" name="description" id="description" value="<?php echo $data['description']; ?>" />
                    <label for="region">Region</label>
                    <input class="input" type="text" name="region" id="region" value="<?php echo $data['region']; ?>" />
                    <button type="submit" class="btn btn-simpan" name="edit">
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
