<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Desa Kawungcarang</title>
  <meta content="Desa Kawungcarang" name="description">
  <meta content="Desa Kawungcarang" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets_login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets_login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets_login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="assets_login/css/style.css">

  </head>
  <body>
  
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html">Parang</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="index.php#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="sejarah.php">Sejarah</a></li>
              <li><a href="peraturan_desa.php">Peraturan Desa</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.php#kelembagaan">Kelembagaan</a></li>
          <li><a class="nav-link scrollto" href="kegiatan.php">Kegiatan</a></li>
          <li><a class="nav-link scrollto " href="agenda.php">Agenda</a></li>
          <li><a class="nav-link scrollto" href="keuangan.php">Keuangan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('gambar/desa1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Daftar Di <strong> Kawungcarang</strong></h3>
            <p class="mb-4">Kawungcarang adalah desa di kecamatan Sumbang, Banyumas, Jawa Tengah, Indonesia.</p>
            <form action="function/register.php" method="post">
              <div class="form-group first">
                <label for="username">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" id="nama">
              </div>
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" placeholder="Username" name="username" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" id="password">
              </div>
    

              <input type="submit" value="Daftar" class="btn btn-block btn-primary" style="background-color: #3498db; border: none;">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    <br>
  <?php include 'template/footer.php'; ?>