<?php 
  include 'template/navbar.php';
?>


 
  <main id="main">

<br>

<!-- ======= Testimonials Section ======= -->
    <section id="kelembagaan" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Kelembagaan</h2>
          <p>Lembaga Yang Bekerja sama dengan desa Kawungcarang</p>
        </div>



        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">
           <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Agenda</th>
                <th scope="col">Tanggal</th>
              </tr>
            </thead>
            <?php
              $no = 1;
              $bulan = date('m');
              $tahun = date('Y');

              $query = mysqli_query($koneksi, "SELECT * FROM agenda WHERE YEAR(tanggal) = '$tahun' ");
              while ($data = mysqli_fetch_array($query)) {
                ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $data['agenda']; ?></td>
                    <td><?php echo $data['tanggal']; ?></td>
                  </tr>
                </tbody>
                <?php
              }
            ?>
            
          </table>

          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
<!-- ======= Testimonials Section ======= -->
  
  </main><!-- End #main -->
<?php include 'template/footer.php'; ?>