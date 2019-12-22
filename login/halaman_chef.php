<html>
<head>
	<title>   halaman chef</title>
</head>
<body>

	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	} ?>

</body>
</html>