
    <div class="pagetitle">
      <h1>Keuangan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Keuangan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
       <div class="card">
            <div class="card-body">
              <a href="?page=tambah_keuangan" class="btn btn-success" style="float: right; margin-top: 20px">Tambah</a>

              <h5 class="card-title">Daftar Keuangan Desa</h5>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Bukti Pembayaran</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Sebelum Perubahan</th>
                    <th scope="col">Sesudah Perubahan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM keuangan");
                  $no = 1;
                  while ($data = mysqli_fetch_array($query)) {
                    ?>
                      <tbody>
                        <tr>
                          <th scope="row"><?php echo $no++; ?></th>
                          <td>
                            <a class="btn btn-primary" href="../file/<?php echo $data['bukti']; ?>">Download</a>
                          </td>
                          <td>
                            <?php echo $data['kategori']; ?>
                          </td>
                          <td>
                            <?php echo number_format($data['sebelum_perubahan']); ?>
                          </td>
                          <td>
                            <?php echo number_format($data['sesudah_perubahaan']); ?>
                          </td>
                          <td><?php echo $data['status']; ?></td>
                          <td>
                            <a href="?page=edit_keuangan&id=<?php echo $data['id']; ?>" class="btn btn-warning">Ubah</a> | 
                            <a href="?page=hapus_keuangan&id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a> 
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