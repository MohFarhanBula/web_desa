        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Data Keuangan Desa Kawungcarang</h5>

              <!-- General Form Elements -->
              <form action="?page=aksi_tambah_keuangan" method="POST" enctype="multipart/form-data">
 
                <div class="row mb-3">
                  <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                  <div class="col-sm-10">
                    <input class="form-control" required="" name="kategori" placeholder="Masukan Kategori" type="text" id="kategori">
                  </div>
                </div>

                 <div class="row mb-3">
                  <label for="Sebelum" class="col-sm-2 col-form-label">Sebelum Perubahan</label>
                  <div class="col-sm-10">
                    <input class="form-control" required="" name="sebelum_perubahan" placeholder="Sebelum Perubahan" type="number" id="Sebelum">
                  </div>
                </div>

                 <div class="row mb-3">
                  <label for="sesudah_perubahan" class="col-sm-2 col-form-label">Sesudah Perubahan</label>
                  <div class="col-sm-10">
                    <input class="form-control" required="" name="sesudah_perubahan" placeholder="Sesudah Perubahan" type="number" id="sesudah_perubahan">
                  </div>
                </div>


               <div class="row mb-3">
                  <label for="bukti" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
                  <div class="col-sm-10">
                    <input class="form-control" required="" name="file" type="file" id="bukti">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="status" class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                    <select id="status" name="status" required="" class="form-control">
                      <option selected="" disabled="">-- Pilih Status -- </option>
                      <option value="Pendapatan">Pendapatan</option>
                      <option value="Belanja">Belanja</option>
                      <option value="Pembiayaan">Pembiayaan</option>
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

