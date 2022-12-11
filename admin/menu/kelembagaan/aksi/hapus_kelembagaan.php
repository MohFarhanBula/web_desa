<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = mysqli_query($koneksi, "DELETE FROM kelembagaan WHERE id = '$id' ");

		if ($query) {
			?>
				<script type="text/javascript">
					alert('Hapus Data Berhasil');
					window.location = "?page=kelembagaan";
				</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert('Hapus Data Gagal');
					window.location = "?page=kelembagaan";
				</script>
			<?php
		}
	}
?>