<?php

include 'connect.php';

// menangkap data yang dikirim dari form login
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = "user";


$query = mysqli_query($koneksi, "INSERT INTO user (nama,username,password,level) VALUES ('$nama','$username','$password','$level')");

if ($query) {
	?>
	<script type="text/javascript">
		alert('Registrasi Akun Berhasil');
		window.location = "../login.php";
	</script>
	<?php
}else{
		?>
	<script type="text/javascript">
		alert('Registrasi Akun Gagal');
		window.location = "../login.php";
	</script>
	<?php

}
 
?>