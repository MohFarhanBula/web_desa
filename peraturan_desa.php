<?php 
  include 'template/navbar.php';
?>


 
  <main id="main">

<br>
<!-- ======= Testimonials Section ======= -->
     <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Peraturan Desa</h2>
          <p>Surat Pedoman melakukan Kegiatan Desa</p>
        </div>


        <div class="row portfolio-container">

         <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Penjelasan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <?php
              $no = 1;
              $query = mysqli_query($koneksi, "SELECT * FROM peraturan_desa ");
              while ($data = mysqli_fetch_array($query)) {
                ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td>

                      <a href="tampil.php?file=<?php echo $data['file']; ?>">
                        <?php echo $data['judul']; ?>
                      </a>
                    </td>
                    <td><?php echo $data['penjelasan']; ?></td>
                    <td><a href="download.php?file=<?php echo $data['file'] ?>" class="btn btn-primary btn-small">Download</a></td>
                  </tr>
                </tbody>
                <?php
              }
            ?>
            
          </table>

        </div>

      </div>
    </section><!-- End Portfolio Section -->


  </main><!-- End #main -->
  <br><br><br><br>

<?php include 'template/footer.php'; ?>