       <?php
        if (isset($_GET['id'])) {
          $id = $_GET['id'];

          $query = mysqli_query($koneksi, "SELECT * FROM peraturan_desa WHERE id = '$id' ");
          while ($data = mysqli_fetch_array($query)) {
            ?>
            <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Peraturan Desa Kawungcarang</h5>

              <!-- General Form Elements -->
              <form action="?page=aksi_edit_peraturan_desa" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input class="form-control" value="<?php echo $data['judul']; ?>" required="" name="judul" placeholder="Masukan Judul kegiatan" type="text" id="judul">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="judul" class="col-sm-2 col-form-label">Penjelasan</label>
                  <div class="col-sm-10">
                      <textarea name="penjelasan" class="form-control" rows="10"><?php echo $data['penjelasan']; ?></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="Gambar" class="col-sm-2 col-form-label">File</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="file" type="file" id="gambar">
                  <span style="color: red; font-style: italic;">Abaikan Jika tidak ingin mengubah File</span>
                  </div>
                </div>
            
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit </label>
                  <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary" value="Ubah Data" name="upload">
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
        