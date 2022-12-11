<?php
if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg','jpeg','pdf');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
			$judul = $_POST['judul'];


			$kategori = $_POST['kategori'];
			$sebelum_perubahan = $_POST['sebelum_perubahan'];
			$sesudah_perubahan = $_POST['sesudah_perubahan'];
			$status = $_POST['status'];

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, '../file/'.$nama);
					$query = mysqli_query($koneksi, "INSERT INTO keuangan VALUES(NULL,'$kategori','$sebelum_perubahan','$sesudah_perubahan', '$nama','$status')");
					if($query){
						?>
							<script type="text/javascript">
								alert("Tambah Data Keuangan Berhasil");
								window.location = "?page=keuangan";
							</script>
						<?php
					}else{
						?>
							<script type="text/javascript">
								alert("Tambah Data Gagal");
								window.location = "?page=keuangan";
							</script>
						<?php
					}
				}else{
					?>
							<script type="text/javascript">
								alert("Ukuran File Terlalu Besar");
								window.location = "?page=keuangan";
							</script>
						<?php
				}
			}else{
				?>
							<script type="text/javascript">
								alert("Ekstensi Yang Di Upload Tidak Di Perbolehkan");
								window.location = "?page=keuangan";
							</script>
						<?php
			}
		}
?>