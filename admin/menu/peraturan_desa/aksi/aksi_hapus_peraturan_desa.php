<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = mysqli_query($koneksi, "DELETE FROM peraturan_desa WHERE id = '$id' ");
		if ($query) {
			?>
				<script type="text/javascript">
					alert('Peraturan Desa Berhasil Di Hapus');
					window.location = "?page=peraturan_desa";
				</script>
			<?php
		}
	}
?>