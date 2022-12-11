<?php include 'template/navbar.php'; ?>

<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = mysqli_query($koneksi, "SELECT * FROM kegiatan WHERE id = '$id' ");
		while ($data = mysqli_fetch_array($query)) {
			?>
				<main id="main">

				    <!-- ======= Breadcrumbs ======= -->
				    <section id="breadcrumbs" class="breadcrumbs">
				      <div class="container">

				        <div class="d-flex justify-content-between align-items-center">
				          <h2><?php echo $data['judul']; ?></h2>
				          <ol>
				            <li><a href="index.php">Home</a></li>
				            <li><?php echo $data['judul']; ?></li>
				          </ol>
				        </div>

				      </div>
				    </section><!-- End Breadcrumbs -->

				    <!-- ======= Portfolio Details Section ======= -->
				    <section id="portfolio-details" class="portfolio-details">
				      <div class="container">

				        <div class="row gy-12">

				          <div class="col-lg-12">
				            <div class="portfolio-details-slider swiper">
				                  <img  src="gambar/<?php echo $data['gambar'] ?>" alt="">
				              <div class="swiper-pagination"></div>
				            </div>
				          </div>
				            <div class="portfolio-description">
				              <h2><?php echo $data['judul']; ?></h2>
				              <span>
				               <?php echo $data['deskripsi']; ?>
				              </span>
				            </div>
				          </div>

				        </div>

				      </div>
				    </section><!-- End Portfolio Details Section -->

				  </main><!-- End #main -->

			<?php
		}

	}
?>
 

<?php include 'template/footer.php'; ?>