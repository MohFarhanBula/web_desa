<!DOCTYPE html>
<html>
  <head>
    <title>Embedding pdf</title>
  </head>
  <body>
    <h1>My pdf</h1>
<?php
	if (isset($_GET['file'])) {
		$file = $_GET['file'];


		//memanggil file example.pdf yang berada di folder bernama file
		$filePath = 'file/'.$file;
		//Membuat kondisi jika file tidak ada
		if (!file_exists($filePath)) {
		    echo "The file $filePath does not exist";
		    die();
		}

		?>

    <object
      type="application/pdf"
      data="<?php echo $filePath; ?>"
      width="600"
      height="700"
    >
    </object>

		<?php

	}


?>
  </body>
</html>