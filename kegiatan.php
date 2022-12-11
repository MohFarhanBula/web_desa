
<?php include 'template/navbar.php'; ?>
 
  <main id="main">

<br>
<!-- ======= Testimonials Section ======= -->
     <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Kegiatan</h2>
          <p>Kegiatan Di Desa Kawungcarang</p>
        </div>


        <div class="row portfolio-container">
          
          <?php
            $query = mysqli_query($koneksi, "SELECT * FROM kegiatan");
            while ($data = mysqli_fetch_array($query)) {
              ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                  <div class="portfolio-wrap">
                    <figure>
                      <img style="width: 100%; height: 100%;" src="gambar/<?php echo $data['gambar'] ?>"  class="img-fluid" alt="">
                      <a href="gambar/<?php echo $data['gambar'] ?>" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="<?php echo $data['judul'] ?>"><i class="bx bx-plus"></i></a>
                      <a href="detail_kegiatan.php?id=<?php echo $data['id'] ?>" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
                    </figure>

                    <div class="portfolio-info">
                      <h4><a href="detail_kegiatan.php?id=<?php echo $data['id'] ?>"><?php echo $data['judul']; ?></a></h4>
                    </div>
                  </div>
                </div>
              <?php
            }
          ?>


        </div>

      </div>
    </section><!-- End Portfolio Section -->


  </main><!-- End #main -->

<?php include 'template/footer.php'; ?>