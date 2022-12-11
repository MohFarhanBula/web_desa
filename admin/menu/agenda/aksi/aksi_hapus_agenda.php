<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = mysqli_query($koneksi, "DELETE FROM agenda WHERE id = '$id' ");
		if ($query) {
			?>
				<script type="text/javascript">
					alert('Agenda Berhasil Di Hapus');
					window.location = "?page=agenda";
				</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert('Agenda Gagal Di Hapus');
					window.location = "?page=agenda";
				</script>
			<?php
		}

	}
?>