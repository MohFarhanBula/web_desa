<?php
	if (isset($_POST['ubah'])) {
		$id = $_POST['id'];
		$agenda = $_POST['agenda'];
		$tanggal = $_POST['tanggal'];

		$query = mysqli_query($koneksi, "UPDATE agenda SET agenda = '$agenda', tanggal = '$tanggal' WHERE id = '$id' ");
		if ($query) {
			?>
				<script type="text/javascript">
					alert('Agenda Berhasil Di Ubah');
					window.location = "?page=agenda";
				</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert('Agenda Gagal Di Ubah');
					window.location = "?page=agenda";
				</script>
			<?php
		}

	}
?>