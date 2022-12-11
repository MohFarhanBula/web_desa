        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Kegiatan Desa Kawungcarang</h5>

              <!-- General Form Elements -->
              <form action="?page=aksi_tambah_kegiatan" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="Gambar" class="col-sm-2 col-form-label">Gambar Kegiatan</label>
                  <div class="col-sm-10">
                    <input class="form-control" required="" name="file" type="file" id="gambar">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                  <div class="col-sm-10">
                    <input class="form-control" required="" name="judul" placeholder="Masukan Judul kegiatan" type="text" id="judul">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="judul" class="col-sm-2 col-form-label">Deskripsi</label>
                  <div class="col-sm-10">
                      <textarea name="deskripsi" class="form-control" rows="10"></textarea>
                  </div>
                </div>
            
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit </label>
                  <div class="col-sm-10">
                    <input type="submit" class="btn btn-primary" value="Tambah Kegiatan" name="upload">
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

