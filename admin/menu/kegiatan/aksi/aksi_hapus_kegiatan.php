<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = mysqli_query($koneksi, "DELETE FROM kegiatan WHERE id = '$id' ");

		if ($query) {
			?>
				<script type="text/javascript">
					alert('Kegiatan Berhasil Di Hapus');
					window.location = "?page=kegiatan";
				</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert('Kegiatan Gagal Di Hapus');
					window.location = "?page=kegiatan";
				</script>
			<?php
		}
	}
?>