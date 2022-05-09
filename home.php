<?php 
include "session.php";
// Ambil Jumlah Data Laptop
$queryData = mysqli_query($koneksi, "SELECT * FROM barang");
$rowData = mysqli_num_rows($queryData);

// Ambil Jumlah Stok di Gudang
$queryStok = mysqli_query($koneksi, "SELECT SUM(stok) FROM barang");
$rowStok = mysqli_fetch_array($queryStok);

// Ambil Jumlah Data Pengguna
$queryPengguna = mysqli_query($koneksi, "SELECT * FROM admin");
$rowPengguna = mysqli_num_rows($queryPengguna);

// ambil jumlah data barang masuk
$queryBarangMasuk = mysqli_query($koneksi, "SELECT * FROM barang_masuk");
$rowBarangMasuk = mysqli_num_rows($queryBarangMasuk);

// ambil jumlah data barang keluar
$queryBarangKeluar = mysqli_query($koneksi, "SELECT * FROM barang_keluar");
$rowBarangKeluar = mysqli_num_rows($queryBarangKeluar);

?>  

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Inventory | Home</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/869/869027.png" type="image/x-icon">
    
    <link rel="stylesheet" href="css/styles/style.css">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img src="css/img/logo.png" style="height: 30px; width: 30px;"> Inventory</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column mt-2">
        <li class="nav-item">
            <a class="nav-link" href="admin/profile.php" >
              <h5><i class="bi bi-person-circle"></i> <?php echo $rowSession['nama_admin'] ?></h5>
            </a>
          </li>
        </ul>
        <hr>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="bi bi-grid-1x2"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/index.php">
              <i class="bi bi-person-lines-fill"></i> Admin
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="barang/index.php">
            <i class="bi bi-box2-fill"></i> Barang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="barang_masuk/index.php">
            <i class="bi bi-box-arrow-in-down"></i> Barang Masuk
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="barang_keluar/index.php">  
            <i class="bi bi-box-arrow-up"></i> Barang Keluar
            </a>
          </li>
          <hr>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">       
            <i class="bi bi-box-arrow-left"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <h1 class="mt-3">Selamat Datang, <?php echo $rowSession['nama_admin'] ?>!</h1>
      <hr style="color: black;">
      <!-- Status Box -->
      <div class="row">
          <div class="col-md-4 text-white m-1">
          <a href="admin/index.php" id="dataDashboard"><div class="row p-2 bg-secondary shadow-sm d-flex justify-content-between align-items-center rounded">
                  <div class="col-8">
                      <h3 class="fs-2"><?php echo $rowPengguna ?></h3>
                      <p class="fs-5 fw-bold" name>Data Admin</p>
                  </div>
                  <div class="col-4">
                  <img src="css/img/17-avatar-man-nodding-outline.gif" style="height: 100px; width: 100px;" id="dataAdmin">
                  </div>
              </div></a>
          </div>
          <div class="col-md-4 text-white m-1">
          <a href="barang/index.php" id="dataDashboard"><div class="row p-2 bg-secondary shadow-sm d-flex justify-content-around align-items-center rounded">
                  <div class="col-8">
                      <h3 class="fs-2"><?php echo $rowData ?></h3>
                      <p class="fs-5 fw-bold" name>Data Barang</p>
                  </div>
                  <div class="col-4">
                    <img src="css/img/107-box-package-open-outline.gif" style="height: 100px; width: 100px;">
                  </div>
              </div></a>
          </div>
          <div class="col-md-4 text-white m-1">
          <a href="barang/index.php" id="dataDashboard"><div class="row p-2 bg-secondary shadow-sm d-flex justify-content-around align-items-center rounded">
                  <div class="col-8">
                      <h3 class="fs-2"><?php echo $rowStok[0] ?></h3>
                      <p class="fs-5 fw-bold" name>Stok Data Barang</p>
                  </div>
                  <div class="col-4">
                    <img src="css/img/146-basket-trolley-shopping-card-outline.gif" style="height: 100px; width: 100px;" >
                  </div>
              </div></a>
          </div>
          <div class="col-md-4 text-white m-1">
          <a href="barang_masuk/index.php" id="dataDashboard"><div class="row p-2 bg-secondary shadow-sm d-flex justify-content-between align-items-center rounded">
                  <div class="col-8">
                      <h3 class="fs-2"><?php echo $rowBarangMasuk ?></h3>
                      <p class="fs-5 fw-bold" name>Data Barang Masuk</p>
                  </div>
                  <div class="col-4">
                  <img src="css/img/497-truck-delivery-outline.gif" style="height: 100px; width: 100px;">
                  </div>
              </div></a>
          </div>   
          <div class="col-md-4 text-white m-1">
          <a href="barang_keluar/index.php" id="dataDashboard"><div class="row p-2 bg-secondary shadow-sm d-flex justify-content-between align-items-center rounded">
                  <div class="col-8">
                      <h3 class="fs-2"><?php echo $rowBarangKeluar ?></h3>
                      <p class="fs-5 fw-bold" name>Data Barang Keluar</p>
                  </div>
                  <div class="col-4">
                  <img src="css/img/259-share-arrow-outline.gif" style="height: 100px; width: 100px;">
                  </div>
              </div></a>
          </div>       
    </main>
  </div>
</div>


    <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>