       <?php
        if (isset($_GET['id'])) {
          $id = $_GET['id'];

          $query = mysqli_query($koneksi, "SELECT * FROM struktur_organisasi WHERE id = '$id' ");
          while ($data = mysqli_fetch_array($query)) {
            $gambar = $data['gambar'];
          }
        }
       ?>
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Struktur Organisasi</h5>

              <!-- General Form Elements -->
              <form action="?page=aksi_edit_struktur" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                  <img src="../gambar/<?php echo $gambar; ?>">

                  <label for="inputNumber" class="col-sm-2 col-form-label">Gambar Struktur Organisasi</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input class="form-control" name="file" type="file" id="formFile">
                    <span style="color: red; font-style: italic;">Abaikan Jika tidak ingin Mengubah Gambar</span>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit </label>
                  <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary" value="Upload" name="upload">
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
