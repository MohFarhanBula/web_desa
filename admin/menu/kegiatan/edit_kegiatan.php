     <?php
      if (isset($_GET['id'])) {
        $id = $_GET['id'];


        $query = mysqli_query($koneksi, "SELECT * FROM kegiatan WHERE id = '$id' ");
        while ($data = mysqli_fetch_array($query)) {
          ?>
            <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ubah Data Kegiatan Desa Kawungcarang</h5>

              <!-- General Form Elements -->
              <form action="?page=aksi_edit_kegiatan" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="Gambar" class="col-sm-2 col-form-label">Gambar Kegiatan</label>
                  <div class="col-sm-10">
                    <img width="300px" src="../gambar/<?php echo $data['gambar']; ?>"><br><br>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input class="form-control" name="file" type="file" id="gambar">
                    <span style="color: red; font-style: italic;">Abaikan Jika tidak ingin Merubah Gambar</span>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                  <div class="col-sm-10">
                    <input class="form-control" required="" value="<?php echo $data['judul'] ?>" name="judul" placeholder="Masukan Judul kegiatan" type="text" id="judul">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="judul" class="col-sm-2 col-form-label">Deskripsi</label>
                  <div class="col-sm-10">
                      <textarea name="deskripsi" class="form-control" rows="10"><?php echo $data['deskripsi']; ?></textarea>
                  </div>
                </div>
 
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit </label>
                  <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary" value="Edit Kegiatan" name="upload">
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

        
