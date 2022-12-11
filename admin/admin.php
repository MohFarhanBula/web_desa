  <?php 
  include '../function/connect.php';
  session_start();
  error_reporting(0);

$username = $_SESSION['username'];


  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    ?>
    <script type="text/javascript">
      alert('Anda Harus Login Terlebih Dahulu Untuk Mengakses Tampilan ini');
      window.location = "../login.php";
    </script>
    <?php
  }
 
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Halaman Admin -  Website Desa kawungcarang</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Parang</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo --> 

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

     
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $username; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <?php
                $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' ");
                while ($data = mysqli_fetch_array($query)) {
                  ?>
                    <h6><?php echo $data['nama']; ?></h6>
                  <?php
                }
              ?>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="?page=dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

     
   
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Profil</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="?page=sejarah">
              <i class="bi bi-circle"></i><span>Sejarah</span>
            </a>
          </li>
          <li>
            <a href="?page=peraturan_desa">
              <i class="bi bi-circle"></i><span>Peraturan Desa</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->
       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#kelembagaan" data-bs-toggle="collapse" href="#">
          <i class="bi bi-receipt"></i><span>Kelembagaan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="kelembagaan" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="?page=struktur_organisasi">
              <i class="bi bi-circle"></i><span>Struktur Organisasi</span>
            </a>
          </li>
          <li>
            <a href="?page=kelembagaan">
              <i class="bi bi-circle"></i><span>Daftar Lembaga</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=kegiatan">
          <i class="bi bi-person-lines-fill"></i>
          <span>Kegiatan</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=agenda">
          <i class="bi bi-envelope"></i>
          <span>Agenda</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="?page=keuangan">
          <i class="bi bi-currency-dollar"></i>
          <span>Keuangan</span>
        </a>
      </li><!-- End Login Page Nav -->

  
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <?php

      //Dashboard
      if ($_GET['page'] == "dashboard") {
        include 'menu/dashboard/dashboard.php';
      }

      //kelembagaan
      else if ($_GET['page'] == "kelembagaan") {
        include 'menu/kelembagaan/kelembagaan.php';
      }else if ($_GET['page'] == "tambah_kelembagaan") {
        include 'menu/kelembagaan/tambah_kelembagaan.php';
      }else if ($_GET['page'] == "aksi_tambah_kelembagaan") {
        include 'menu/kelembagaan/aksi/aksi_tambah_kelembagaan.php';
      }else if ($_GET['page'] == "edit_kelembagaan") {
        include 'menu/kelembagaan/edit_kelembagaan.php';
      }else if ($_GET['page'] == "aksi_edit_kelembagaan") {
        include 'menu/kelembagaan/aksi/aksi_edit_kelembagaan.php';
      }else if ($_GET['page'] == "hapus_kelembagaan") {
        include 'menu/kelembagaan/aksi/hapus_kelembagaan.php';
      }

        //struktur_organisasi
      else if ($_GET['page'] == "struktur_organisasi") {
        include 'menu/struktur_organisasi/struktur.php';
      }else if ($_GET['page'] == "edit_struktur") {
        include 'menu/struktur_organisasi/edit_struktur.php';
      }else if ($_GET['page'] == "aksi_edit_struktur") {
        include 'menu/struktur_organisasi/aksi/aksi_edit_struktur.php';
      }


      //kegiatan
      else if ($_GET['page'] == "kegiatan") {
        include 'menu/kegiatan/kegiatan.php';
      }else if ($_GET['page'] == "tambah_kegiatan") {
        include 'menu/kegiatan/tambah_kegiatan.php';
      }else if ($_GET['page'] == "aksi_tambah_kegiatan") {
        include 'menu/kegiatan/aksi/aksi_tambah_kegiatan.php';
      }else if ($_GET['page'] == "hapus_kegiatan") {
        include 'menu/kegiatan/aksi/aksi_hapus_kegiatan.php';
      }else if ($_GET['page'] == "edit_kegiatan") {
        include 'menu/kegiatan/edit_kegiatan.php';
      }else if ($_GET['page'] == "aksi_edit_kegiatan") {
        include 'menu/kegiatan/aksi/aksi_edit_kegiatan.php';
      }

      //agenda
      else if ($_GET['page'] == "agenda") {
        include 'menu/agenda/agenda.php';
      }else if ($_GET['page'] == "tambah_agenda") {
        include 'menu/agenda/tambah_agenda.php';
      }else if ($_GET['page'] == "aksi_tambah_agenda") {
        include 'menu/agenda/aksi/aksi_tambah_agenda.php';
      }else if ($_GET['page'] == "edit_agenda") {
        include 'menu/agenda/ubah_agenda.php';
      }else if ($_GET['page'] == "aksi_ubah_agenda") {
        include 'menu/agenda/aksi/aksi_ubah_agenda.php';
      }else if ($_GET['page'] == "hapus_agenda") {
        include 'menu/agenda/aksi/aksi_hapus_agenda.php';
      }

      //sejarah
      else if ($_GET['page'] == "sejarah") {
        include 'menu/sejarah/sejarah.php';
      }else if ($_GET['page'] == "tambah_sejarah") {
        include 'menu/sejarah/tambah_sejarah.php';
      }else if ($_GET['page'] == "aksi_tambah_sejarah") {
        include 'menu/sejarah/aksi/aksi_tambah_sejarah.php';
      }else if ($_GET['page'] == "edit_sejarah") {
        include 'menu/sejarah/edit_sejarah.php';
      }else if ($_GET['page'] == "aksi_edit_sejarah") {
        include 'menu/sejarah/aksi/aksi_edit_sejarah.php';
      }else if ($_GET['page'] == "hapus_sejarah") {
        include 'menu/sejarah/aksi/aksi_hapus_sejarah.php';
      }

      //peraturan Desa
      else if ($_GET['page'] == "peraturan_desa") {
        include 'menu/peraturan_desa/peraturan_desa.php';
      }else if ($_GET['page'] == "tambah_peraturan_desa") {
        include 'menu/peraturan_desa/tambah_peraturan_desa.php';
      }else if ($_GET['page'] == "aksi_tambah_peraturan_desa") {
        include 'menu/peraturan_desa/aksi/aksi_tambah_peraturan_desa.php';
      }else if ($_GET['page'] == "hapus_peraturan_desa") {
        include 'menu/peraturan_desa/aksi/aksi_hapus_peraturan_desa.php';
      }else if ($_GET['page'] == "edit_peraturan_desa") {
        include 'menu/peraturan_desa/edit_peraturan_desa.php';
      }else if ($_GET['page'] == "aksi_edit_peraturan_desa") {
        include 'menu/peraturan_desa/aksi/aksi_edit_peraturan_desa.php';
      }

      //keuangan
      else if ($_GET['page'] == "keuangan") {
        include 'menu/keuangan/keuangan.php';
      }else if ($_GET['page'] == "tambah_keuangan") {
        include 'menu/keuangan/tambah_keuangan.php';
      }else if ($_GET['page'] == "aksi_tambah_keuangan") {
        include 'menu/keuangan/aksi/aksi_tambah_keuangan.php';
      }else if ($_GET['page'] == "hapus_keuangan") {
        include 'menu/keuangan/aksi/aksi_hapus_keuangan.php';
      }else if ($_GET['page'] == "edit_keuangan") {
        include 'menu/keuangan/edit_keuangan.php';
      }else if ($_GET['page'] == "aksi_edit_keuangan") {
        include 'menu/keuangan/aksi/aksi_edit_keuangan.php';
      }

      else{
        include 'menu/dashboard/dashboard.php';
      }

    ?>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Desa Kawungcarang</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>