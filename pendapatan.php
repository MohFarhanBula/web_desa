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
          <p>Update Informasi Mengenai Transparasi Desa</p>
        </div>



        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">
         <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Kategori</th>
                <th scope="col">Sebelum Perubahan</th>
                <th scope="col">Sesudah Perubahan</th>
                <th scope="col">Bukti Pengeluaran</th>
              </tr>
            </thead>
            <?php

              $query = mysqli_query($koneksi, "SELECT * FROM keuangan WHERE status = 'Pendapatan' ");
              while ($data = mysqli_fetch_array($query)) {
                $sebelum_perubahan = $data['sebelum_perubahan'];
                $sesudah_perubahaan = $data['sebelum_perubahan'];
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $data['kategori'] ?></td>
                    <td><?php echo number_format($data['sebelum_perubahan']); ?></td>
                    <td><?php echo number_format($data['sesudah_perubahaan']); ?></td>
                    <td><a class="btn btn-primary" href="file/<?php echo $data['bukti'] ?>">Download</a></td>
                  </tr>
                </tbody>
                
                <?php
              }
            ?>
            <tfoot>
                  <tr>
                    <th>Jumlah Pendapatan</th>
                    <th>
                      <?php 
                        $query1 = mysqli_query($koneksi, "SELECT sebelum_perubahan FROM keuangan WHERE status = 'Pendapatan' ");
                        $hitung1 = mysqli_num_rows($query1);


                        $hasil1 = $sebelum_perubahan*$hitung1;
                      ?>
                      <?php echo number_format($hasil1); ?></th>
                    <th>
                      <?php 
                        $query2 = mysqli_query($koneksi, "SELECT sesudah_perubahaan FROM keuangan WHERE status = 'Pendapatan'");
                        $hitung2 = mysqli_num_rows($query2);


                        $hasil2 = $sesudah_perubahaan*$hitung2;
                      ?>
                      <?php echo number_format($hasil2); ?></th>
                    
                    <th>-</th>
                  </tr>
                </tfoot>
            
          </table>

        </div>

      </div>
    </div>
    </section><!-- End Portfolio Section -->


  </main><!-- End #main -->

<?php include 'template/footer.php'; ?>