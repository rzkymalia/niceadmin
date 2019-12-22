<h2>Ini adalah halaman log out</h2>


<?php 

session_destroy();
echo "<script>alert('anda telah logout'); </script>";
echo "<script>location='../login/index.php';</script>";

 ?>