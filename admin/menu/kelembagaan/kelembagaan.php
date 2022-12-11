
    <div class="pagetitle">
      <h1>Kelembagaan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Kelembagaan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
       <div class="card">
            <div class="card-body">
              <a href="?page=tambah_kelembagaan" class="btn btn-success" style="float: right; margin-top: 20px">Tambah</a>

              <h5 class="card-title">Daftar Lembaga</h5>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar Lembaga</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM kelembagaan");
                  $no = 1;
                  while ($data = mysqli_fetch_array($query)) {
                    ?>
                      <tbody>
                        <tr>
                          <th scope="row"><?php echo $no++; ?></th>
                          <td>
                            <img src="../gambar/<?php echo $data['gambar']; ?>"  width="250px" height="100px">
                          </td>
                          <td>
                            <a href="?page=edit_kelembagaan&id=<?php echo $data['id']; ?>" class="btn btn-warning">Ubah</a> | 
                            <a href="?page=hapus_kelembagaan&id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a> 
                          </td>
                        </tr>
                      </tbody>
                    <?php
                  }
                ?>
                
              </table>
              <!-- End Tables without borders -->

            </div>
          </div>

    </section>