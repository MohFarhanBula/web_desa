<?php 
  include 'template/navbar.php';
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Selamat Datang Di Desa <span>Kawungcarang</span></h1>
      <h2>Kawungcarang adalah desa di kecamatan Sumbang, Banyumas, Jawa Tengah, Indonesia.</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">


<!-- ======= Testimonials Section ======= -->
    <section id="kelembagaan" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Kelembagaan</h2>
          <p>Lembaga Yang Bekerja sama dengan desa Kawungcarang</p>
        </div>

        <?php
          $query = mysqli_query($koneksi, "SELECT * FROM struktur_organisasi");
          while ($data = mysqli_fetch_array($query)) {
            ?>
              <img src="gambar/<?php echo $data['gambar']; ?>" width="100%" align="center">
            <?php
          }
        ?>


        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php
              $query = mysqli_query($koneksi, "SELECT * FROM kelembagaan");
              while ($data = mysqli_fetch_array($query)) {
                ?>
                  <div class="swiper-slide" >
                    <div class="testimonial-item">
                      <img style="width: 300px" src="gambar/<?php echo $data['gambar' ]?>" class="testimonial-img" alt="">
                    </div>
                  </div><!-- End testimonial item -->

                <?php
              }
            ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


  </main><!-- End #main -->

<?php include 'template/footer.php'; ?>