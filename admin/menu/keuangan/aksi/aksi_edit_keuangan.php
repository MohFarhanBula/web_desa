<?php
if($_POST['upload']){
	$ekstensi_diperbolehkan	= array('png','jpg','jpeg','pdf');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];	

	$id = $_POST['id'];
	$kategori = $_POST['kategori'];
	$sebelum_perubahan = $_POST['sebelum_perubahan'];
	$sesudah_perubahan = $_POST['sesudah_perubahan'];
	$status = $_POST['status'];

	if ($nama == "") {

		$query = mysqli_query($koneksi, "UPDATE keuangan SET kategori = '$kategori', sebelum_perubahan = '$sebelum_perubahan', sesudah_perubahaan = '$sesudah_perubahan', status = '$status' WHERE id = '$id' ");
		if($query){
					?>
						<script type="text/javascript">
							alert("Data Keuangan Berhasil Di Ubah");
							window.location = "?page=keuangan";
						</script>
					<?php
				}else{
					?>
						<script type="text/javascript">
							alert("Gagal Mengubah Data Keuangan");
							window.location = "?page=keuangan";
						</script>
					<?php
				}
	}else {
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
			if($ukuran < 1044070){			
				move_uploaded_file($file_tmp, '../file/'.$nama);
				$query = mysqli_query($koneksi, "UPDATE keuangan SET kategori = '$kategori', sebelum_perubahan = '$sebelum_perubahan', sesudah_perubahaan = '$sesudah_perubahan', status = '$status', bukti = '$nama' WHERE id = '$id' ");
				if($query){
					?>
						<script type="text/javascript">
							alert("Data Keuangan Berhasil Di Ubah");
							window.location = "?page=keuangan";
						</script>
					<?php
				}else{
					?>
						<script type="text/javascript">
							alert("Gagal Mengubah Data Keuangan");
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
	}

		

		
?>