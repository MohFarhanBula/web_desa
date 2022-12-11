        <?php
          if (isset($_GET['id'])) {
            $id = $_GET['id'];


            $query = mysqli_query($koneksi, "SELECT * FROM keuangan WHERE id = '$id' ");
            while ($data = mysqli_fetch_array($query)) {
              ?>
              <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Data Keuangan Desa Kawungcarang</h5>

              <!-- General Form Elements -->
              <form action="?page=aksi_edit_keuangan" method="POST" enctype="multipart/form-data">
 
                <div class="row mb-3">
                  <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input class="form-control" required="" value="<?php echo $data['kategori'] ?>" name="kategori" placeholder="Masukan Kategori" type="text" id="kategori">
                  </div>
                </div>

                 <div class="row mb-3">
                  <label for="Sebelum" class="col-sm-2 col-form-label">Sebelum Perubahan</label>
                  <div class="col-sm-10">
                    <input class="form-control" required="" value="<?php echo $data['sebelum_perubahan'] ?>" name="sebelum_perubahan" placeholder="Sebelum Perubahan" type="number" id="Sebelum">
                  </div>
                </div>

                 <div class="row mb-3">
                  <label for="sesudah_perubahan" class="col-sm-2 col-form-label">Sesudah Perubahan</label>
                  <div class="col-sm-10">
                    <input class="form-control" value="<?php echo $data['sesudah_perubahaan'] ?>" required="" name="sesudah_perubahan" placeholder="Sesudah Perubahan" type="number" id="sesudah_perubahan">
                  </div>
                </div>


               <div class="row mb-3">
                  <label for="bukti" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
                  <div class="col-sm-10">
                    <input class="form-control" name="file" type="file" id="bukti">
                    <a href="../file/<?php echo $data['bukti'] ?>"><?php echo $data['bukti']; ?></a>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="status" class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                    <select id="status" name="status" required="" class="form-control">
                      <?php 
                        if ($data['status'] == "Pendapatan") {
                          ?>
                            <option value="Pendapatan" selected="">Pendapatan</option>
                            <option value="Belanja">Belanja</option>
                            <option value="Pembiayaan">Pembiayaan</option>
                          <?php
                        }else if ($data['status'] == "Pembiayaan") {
                          ?>
                            <option value="Pendapatan">Pendapatan</option>
                            <option value="Belanja">Belanja</option>
                            <option value="Pembiayaan" selected="">Pembiayaan</option>
                          <?php
                        }else if ($data['status'] == "Belanja") {
                          ?>
                            <option value="Belanja" selected="">Belanja</option>
                            <option value="Pendapatan">Pendapatan</option>
                            <option value="Pembiayaan">Pembiayaan</option>
                          <?php
                        }
                      ?>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit </label>
                  <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary" value="Simpan Data" name="upload">
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
        