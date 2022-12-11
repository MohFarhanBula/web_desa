<?php 
	if (isset($_POST['upload'])) {
		$agenda = $_POST['agenda'];
		$tanggal = $_POST['tanggal'];

		$query = mysqli_query($koneksi, "INSERT INTO agenda(agenda, tanggal)VALUES('$agenda','$tanggal')");
		if ($query) {
			?>
				<script type="text/javascript">
					alert("Agenda berhasil Di tambahkan");
					window.location = "?page=agenda";
				</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert("Agenda Gagal Di tambahkan");
					window.location = "?page=agenda";
				</script>
			<?php
		}
	}

?>