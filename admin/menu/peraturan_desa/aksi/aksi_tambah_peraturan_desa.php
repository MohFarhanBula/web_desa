<?php
if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('pdf');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
			$judul = $_POST['judul'];
			$penjelasan = $_POST['penjelasan'];

			// memecah string input berdasarkan karakter '\r\n\r\n'
			$pecah = explode("\r\n\r\n", $penjelasan);
			 
			// string kosong inisialisasi
			$text = "";
			 
			// untuk setiap substring hasil pecahan, sisipkan <p> di awal dan </p> di akhir
			// lalu menggabungnya menjadi satu string utuh $text
			for ($i=0; $i<=count($pecah)-1; $i++)
			{
			   $part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]);
			   $text .= $part;
			}

			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, '../file/'.$nama);
					$query = mysqli_query($koneksi, "INSERT INTO peraturan_desa VALUES(NULL, '$judul','$text','$nama')");
					if($query){
						?>
							<script type="text/javascript">
								alert("Tambah Data Peraturan Desa Berhasil");
								window.location = "?page=peraturan_desa";
							</script>
						<?php
					}else{
						?>
							<script type="text/javascript">
								alert("Tambah Data Gagal");
								window.location = "?page=peraturan_desa";
							</script>
						<?php
					}
				}else{
					?>
							<script type="text/javascript">
								alert("Ukuran File PDF Terlalu Besar");
								window.location = "?page=peraturan_desa";
							</script>
						<?php
				}
			}else{
				?>
							<script type="text/javascript">
								alert("Hanya Bisa Mengupload File PDF Saja");
								window.location = "?page=peraturan_desa";
							</script>
						<?php
			}
		}
?>