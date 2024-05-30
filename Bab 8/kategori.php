<?php
session_start();
if ($_SESSION['username'] == null) {
	header('location:../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="logo.jpeg" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="kategori.css">
    <title>Admin Market</title>
    <style>
        .btn-tambah {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 20px;
            display: inline-block;
        }
        .btn-tambah:hover {
            background-color: #218838;
        }
        .btn-edit, .btn-delete {
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-right: 5px;
            display: inline-block;
        }
        .btn-edit:hover {
            background-color: #0056b3;
        }
        .btn-delete {
            background-color: #dc3545;
        }
        .btn-delete:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>MarMin</h3>
            </div>
            <ul class="list-unstyled components">
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
                        <span class="links_name">Transaction</span>
                    </a>
                </li>
                  <li>
                    <a href="logout.php">
                        <i class="bx bxs-log-out-circle"></i>
                        <span class="links_name">Log out</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                </div>
            </nav>
            <h3>Categories</h3>
            <button type="button" class="btn btn-tambah">
				<a href="kategori-entry.php" style="color: white; text-decoration: none;">Tambah Data</a>
			</button>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" style="width: 20%">Region</th>
                        <th>Categories</th>
                        <th scope="col" style="width: 20%">Name</th>
                        <th scope="col" style="width: 15%">Price</th>
                        <th scope="col" style="width: 30%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = "SELECT * FROM tb_kategori";
                    $result = mysqli_query($koneksi, $sql);
                    if (mysqli_num_rows($result) == 0) {
                        echo "
                        <tr>
                            <td colspan='5' align='center'>Data Kosong</td>
                        </tr>
                        ";
                    } else {
                        while ($data = mysqli_fetch_assoc($result)) {
                            echo "
                            <tr>
                                <td>$data[region]</td>
                                <td>$data[kategori]</td>
                                <td>$data[description]</td>
                                <td>$data[harga]</td>
                                <td>
                                    <a class='btn-edit' href='kategori-edit.php?id=$data[id]'>Edit</a> 
                                    <a class='btn-delete' href='kategori-hapus.php?id=$data[id]'>Hapus</a>
                                </td>
                            </tr>
                            ";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
