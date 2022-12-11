
    <div class="pagetitle">
      <h1>Struktur Ogranisasi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Struktur Organisasi</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
       <div class="card">
            <div class="card-body">

              <h5 class="card-title">Struktur Organisasi</h5>
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar Struktur Organiasasi</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM struktur_organisasi");
                  $no = 1;
                  while ($data = mysqli_fetch_array($query)) {
                    ?>
                      <tbody>
                        <tr>
                          <th scope="row"><?php echo $no++; ?></th>
                          <td>
                            <img src="../gambar/<?php echo $data['gambar']; ?>"  width="50%">
                          </td>
                          <td>
                            <a href="?page=edit_struktur&id=<?php echo $data['id']; ?>" class="btn btn-warning">Ubah</a>
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