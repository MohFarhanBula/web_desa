<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$query = mysqli_query($koneksi, "DELETE FROM keuangan WHERE id = '$id' ");

		if ($query) {
			?>
				<script type="text/javascript">
					alert('Keuangan Berhasil Di Hapus');
					window.location = "?page=keuangan";
				</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert('Keuangan Gagal Di Hapus');
					window.location = "?page=keuangan";
				</script>
			<?php
		}
	}
?>