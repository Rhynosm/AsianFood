<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="logo.jpeg" />
   <link rel="stylesheet" href="transaksi.css" />
   <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Admin Market | Transaction</title>
</head>
<body>
   <div class="sidebar">
      <div class="logo-details">
         <i class="bx bxs-window-al"></i>
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
               <span class="links_name">Transaksi</span>
            </a>
         </li>
         <li>
            <a href="#">
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
         <h3>Transaction</h3>
         <table class="table-data">
            <thead>
               <tr>
                  <th>Tanggal</th>
                  <th>Nama Produk</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Status</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>28/03/2023</td>
                  <td>Cabai Rawit</td>
                  <td>vegetables</td>
                  <td>90.000/Kg</td>
                  <td>
                     <p class="success">Success</p>
                  </td>
                  <td>
                     <button class="btn_detail"
                        onclick="showDetails('28/03/2023', 'Cabai Rawit', 'vegetables', '90.000/Kg', 'Success')">Detail</button>
                  </td>
               </tr>
            </tbody>
         </table>
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
      function showDetails(tanggal, nama, kategori, harga, status) {
         alert(`Tanggal: ${tanggal}\nNama: ${nama}\nKategori: ${kategori}\nHarga: ${harga}\nStatus: ${status}`);
      }
   </script>
</body>

</html>
