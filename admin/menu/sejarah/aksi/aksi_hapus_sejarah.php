<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = mysqli_query($koneksi, "DELETE FROM sejarah WHERE id = '$id' ");

		if ($query) {
			?>
				<script type="text/javascript">
					alert('Sejarah Berhasil Di Hapus');
					window.location = "?page=sejarah";
				</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert('Sejarah Gagal Di Hapus');
					window.location = "?page=sejarah";
				</script>
			<?php
		}
	}
?>