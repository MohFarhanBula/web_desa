    <?php
      if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = mysqli_query($koneksi, "SELECT * FROM agenda WHERE id = '$id' ");

        while ($data = mysqli_fetch_array($query)) {
          ?>
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Ubah Data Agenda Desa Kawungcarang</h5>

                    <!-- General Form Elements -->
                    <form action="?page=aksi_ubah_agenda" method="POST">
                      <div class="row mb-3">
                        <label for="judul" class="col-sm-2 col-form-label">Agenda</label>
                        <div class="col-sm-10">
                          <input type="hidden" name="id" value="<?php echo $id; ?>">
                          <input class="form-control" value="<?php echo $data['agenda']; ?>" required="" name="agenda" placeholder="Masukan Judul Agenda" type="text" id="judul">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="judul" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" value="<?php echo $data['tanggal']; ?>" name="tanggal" class="form-control">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Submit </label>
                        <div class="col-sm-10">
                          <input type="submit" class="btn btn-primary" value="Ubah Agenda" name="ubah">
                        </div>
                      </div>

                    </form><!-- End General Form Elements -->

                  </div>
                </div>

              </div>


          <?php
        }
      }
    ?>

      