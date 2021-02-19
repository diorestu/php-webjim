<?php
include("./config/koneksi.php");

?>
<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.79.0">
  <title>Admin Website</title>
  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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
  <style>
    body {
      font-family: 'Nunito';
      font-size: 20px;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="#">Sign out</a>
      </li>
    </ul>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link <?php if ($page == 'home'){echo 'active';} ?>" href="index.php?page=home">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($page == 'konten'){echo ' active';} ?>" href=" index.php?page=konten">
                <span data-feather="file"></span>
                Konten
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=kegiatan">
                <span data-feather="shopping-cart"></span>
                Kegiatan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=penerima">
                <span data-feather="users"></span>
                Data Penerima
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=laporan">
                <span data-feather="bar-chart-2"></span>
                Laporan Kegiatan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=pengaturan">
                <span data-feather="layers"></span>
                Pengaturan
              </a>
            </li>
          </ul>


        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <?php
        if (isset($_GET['page'])) {
          $page = $_GET['page'];

          switch ($page) {
            case 'home':
              include "pages/home/index.php";
              break;
            case 'konten':
              include "pages/konten/index.php";
              break;
            case 'penerima':
              include "pages/penerima/index.php";
              break;
            case 'kegiatan':
              include "pages/kegiatan/index.php";
              break;
            case 'laporan':
              include "pages/laporan.php/index.php";
              break;
            default:
              echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
              break;
          }
        } else {
          include "pages/dashboard.php";
        }
        ?>
      </main>
    </div>
  </div>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="dashboard.js"></script>


</body>

</html>