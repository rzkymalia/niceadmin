<?php

// link nya adalahh : http://localhost/menucoba/loginWithLink.php?nomeja=09&password=0909&login=

?>

<?php 
session_start();
// koneksi ke database
$koneksi = new mysqli ("localhost", "root", "", "menufix");
?>





				<?php 
				if (isset($_GET["login"] ) )

				{
					$nomeja =$_GET["nomeja"];
					$password = $_GET["password"];
	//lakukan query ngecek akun di tabel meja
					$ambil = $koneksi->query("SELECT * FROM meja WHERE no_meja='$nomeja' AND password='$password' ");

	//ngitung akun yang terambil 
					$akunyangcocok = $ambil->num_rows;

	//jika 1 akun yang cocok, maka diloginkan
					if ($akunyangcocok==1)
					{
		//anda sudah login
		//mendapatkan akun dalam bentuk array
						$akun = $ambil-> fetch_assoc();
		//simpan di session meja
						$_SESSION["meja"]= $akun;
						//echo "<script> alert ('anda sukses login, silahkan berbelanja'); </script>";
						echo "<script> location='index.php';</script>";
					}
					
				}



				?>
