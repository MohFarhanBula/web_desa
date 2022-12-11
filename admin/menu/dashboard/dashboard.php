
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Kegiatan <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-lines-fill"></i>
                    </div>
                    <?php
                      $a = mysqli_query($koneksi, "SELECT * FROM Kegiatan");
                      $aa = mysqli_num_rows($a);
                    ?>
                    <div class="ps-3">
                      <h6><?php echo $aa; ?></h6>
                      <span class="text-muted small pt-2 ps-1">Jumlah Data Kegiatan</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Peraturan Desa <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-gear"></i>
                    </div>
                    <?php
                      $b = mysqli_query($koneksi, "SELECT * FROM peraturan_desa");
                      $bb = mysqli_num_rows($b);
                    ?>
                    <div class="ps-3">
                      <h6><?php echo $bb; ?></h6>
                      <span class="text-muted small pt-2 ps-1">Jumlah Data Peraturan Desa</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->


            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Daftar Lembaga <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-receipt"></i>
                    </div>
                    <?php
                      $c = mysqli_query($koneksi, "SELECT * FROM kelembagaan");
                      $cc = mysqli_num_rows($c);
                    ?>
                    <div class="ps-3">
                      <h6><?php echo $cc; ?></h6>
                      <span class="text-muted small pt-2 ps-1">Jumlah Data Lembaga</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->




            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Agenda <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-envelope"></i>
                    </div>
                    <?php
                      $d = mysqli_query($koneksi, "SELECT * FROM agenda");
                      $dd = mysqli_num_rows($d);
                    ?>
                    <div class="ps-3">
                      <h6><?php echo $dd; ?></h6>
                      <span class="text-muted small pt-2 ps-1">Jumlah Data Agenda</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->


            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">keuangan <span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <?php
                      $e = mysqli_query($koneksi, "SELECT * FROM Kegiatan");
                      $ee = mysqli_num_rows($e);
                    ?>
                    <div class="ps-3">
                      <h6><?php echo $ee; ?></h6>
                      <span class="text-muted small pt-2 ps-1">Jumlah Data keuangan</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

      

        </div><!-- End Right side columns -->

      </div>
    </section>