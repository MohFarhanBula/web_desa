<?php
if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, '../gambar/'.$nama);
					$query = mysqli_query($koneksi, "INSERT INTO kelembagaan VALUES(NULL, '$nama')");
					if($query){
						?>
							<script type="text/javascript">
								alert("Gambar Berhasil Di Upload");
								window.location = "?page=kelembagaan";
							</script>
						<?php
					}else{
						?>
							<script type="text/javascript">
								alert("Gagal Mengupload Gambar");
								window.location = "?page=kelembagaan";
							</script>
						<?php
					}
				}else{
					?>
							<script type="text/javascript">
								alert("Ukuran File Terlalu Besar");
								window.location = "?page=kelembagaan";
							</script>
						<?php
				}
			}else{
				?>
							<script type="text/javascript">
								alert("Ekstensi Yang Di Upload Tidak Di Perbolehkan");
								window.location = "?page=kelembagaan";
							</script>
						<?php
			}
		}
?>