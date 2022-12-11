
    <div class="pagetitle">
      <h1>Peraturan Desa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Peraturan Desa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
       <div class="card">
            <div class="card-body">
              <a href="?page=tambah_peraturan_desa" class="btn btn-success" style="float: right; margin-top: 20px">Tambah</a>

              <h5 class="card-title">Daftar Peraturan Desa</h5>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penjelasan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM peraturan_desa");
                  $no = 1;
                  while ($data = mysqli_fetch_array($query)) {
                    ?>
                      <tbody>
                        <tr>
                          <th scope="row"><?php echo $no++; ?></th>
                          <td><?php echo $data['judul']; ?></td>
                          <td><?php echo $data['penjelasan']; ?></td>
                          <td>
                            <a href="../download.php?file=<?php echo $data['file'] ?>" class="btn btn-primary">Download</a> |
                            <a href="?page=edit_peraturan_desa&id=<?php echo $data['id']; ?>" class="btn btn-warning">Ubah</a> | 
                            <a href="?page=hapus_peraturan_desa&id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a> 
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