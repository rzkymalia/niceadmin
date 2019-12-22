<?php 
session_start();
// koneksi ke database
$koneksi = new mysqli ("localhost", "root", "", "menufix");
?>

<html>
<head>
	<title>LOGIN</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style>
		body{
			font-family: Century Gothic;
			background: url(gambar/bglogin.jpg) no-repeat;
		}
		
	</style>
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light  bg-light fixed-top mb-3">
		<div class="container">

			<h1> <a class="navbar-brand font-weight-bold text-dark" href="#">Kafe Rute 15</a> </h1>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto mr-4">
					<li class="nav-item dropdown">
						<a class="nav-link text-dark dropdown-toggle font-weight-bold " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="makanan.php">Makanan</a>
							<a class="dropdown-item" href="minuman.php">Minuman</a>
						</div>
						<li class="nav-item active">
							<a class="nav-link  text-dark font-weight-bold " href="carapesan.php">Cara Pesan <span class="sr-only">(current) </span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link  text-dark font-weight-bold " href="keranjang.php">Keranjang<span class="sr-only">(current) </span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link  text-dark font-weight-bold " href="checkout.php">Checkout <span class="sr-only">(current) </span></a>
						</li>
						<!-- Jika sudah login (ada session meja) -->
						<?php if (isset($_SESSION["meja"])): ?>
							<button><a href="logout.php">Logout </a></button> 

							<!-- Selain itu (belum ada session meja ) -->
							<?php else: ?>
								<button><a href="login.php">Login </a></button> 
							<?php endif ?>
							
						</ul>
					</div>
				</div>
			</nav>
			
			<br><br><br><br><br><br><br><br><br>
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
				
					</div>

					<div class="col-sm-4">
						<h2 class="page-header text-warning text-center font-weight-bold">LOGIN</h2> 
						<form method="post">
							<div class="form-group">
								<label class="font-weight-bold text-light">No Meja</label><br>
								<input type="nomeja" class="form-control" name="nomeja">
								<label class="font-weight-bold text-light">Password</label><br>
								<input type="password" class="form-control" name="password">
								<br>
								<center> <button class="btn btn-light" name="login">Login</button> </center>
							</div>	
						</form>
					</div>
							<div class="col-sm-4">
								
						</div>
					</div>	
				</div>






				<?php 
				if (isset($_POST["login"] ) )

				{
					$nomeja =$_POST["nomeja"];
					$password = $_POST["password"];
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
						echo "<script> alert ('anda sukses login, silahkan berbelanja'); </script>";
						echo "<script> location='index.php';</script>";
					}
					else{
		//anda gagal login
						echo "<script> alert ('anda gagal login, periksa akun anda'); </script>";
						echo "<script>location='login.php';</script>";
					}
				}



				?>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

				<footer class=" footer-light bg-light text-dark font-weight-bold">
					<div class="container pt-3">
						<div class="row text-center">
							<div class="col">
								<p> Copyright | 2019</p>
							</div>
						</div>
					</div>
				</footer>

				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
			</body>
			</html>