
    <div class="pagetitle">
      <h1>Agenda</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Agenda</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
       <div class="card">
            <div class="card-body">
              <a href="?page=tambah_agenda" class="btn btn-success" style="float: right; margin-top: 20px">Tambah</a>

              <h5 class="card-title">Daftar Agenda Desa</h5>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Agenda Desa</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM agenda");
                  $no = 1;
                  while ($data = mysqli_fetch_array($query)) {
                    ?>
                      <tbody>
                        <tr>
                          <th scope="row"><?php echo $no++; ?></th>
                          <td><?php echo $data['agenda']; ?></td>
                          <td><?php echo $data['tanggal']; ?></td>
                          <td>
                            <a href="?page=edit_agenda&id=<?php echo $data['id']; ?>" class="btn btn-warning">Ubah</a> | 
                            <a href="?page=hapus_agenda&id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a> 
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