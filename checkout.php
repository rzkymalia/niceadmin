<?php 
session_start();
$koneksi = new mysqli ("localhost", "root", "", "menufix");

//jika tidak ada session meja  (belum login) maka dilarikan ke login php
if (!isset($_SESSION["meja"])) {
  echo "<script> alert('silahkan login');</script>";
  echo "<script> location='login.php'; </script>";
}
if (empty($_SESSION['keranjang']) OR !isset ($_SESSION["keranjang"])) {
  echo "<script> alert ('keranjang kosong, silahkan belanja dulu') ; </script>";
  echo "<script>location='index.php';</script> ";
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>checkout</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="font_awesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <style>
    body{
      font-family: Century Gothic;
      background-image: url(foto_menu/aroma.jpg);

    }
  </style>
</head>
<body>
  <br> 
  <nav class="navbar navbar-expand-lg navbar-light  bg-light fixed-top mb-3">
    <div class="container">
      <h1> <a class="navbar-brand font-weight-bold text-warning" href="#">Kafe Rute 15</a> </h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-4">
          <li class="nav-item dropdown">
            <a class="nav-link text-info dropdown-toggle font-weight-bold" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="makanan.php">Makanan</a>
              <a class="dropdown-item " href="minuman.php">Minuman</a>
              <a class="dropdown-item" href="snack.php"> Snack</a>
              <a class="dropdown-item" href="dessert.php">Dessert</a>
            </div>
            <li class="nav-item active">
              <a class="nav-link  text-info font-weight-bold" href="index.php">Home<span class="sr-only">(current) </span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link  text-info font-weight-bold" href="carapesan.php">Cara Pesan <span class="sr-only">(current) </span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link  text-info font-weight-bold" href="keranjang.php">Keranjang<span class="sr-only">(current) </span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link  text-info font-weight-bold" href="checkout.php">Checkout <span class="sr-only">(current) </span></a>
            </li>
            <!-- Jika sudah login (ada session meja) -->
            <?php if (isset($_SESSION["meja"])): ?>
              <li class="nav-item active">
                <button class="btn btn-danger"><a href="logout.php"><font color="white">Logout</font></a></button>
              </li>
              <!-- Selain itu (belum ada session meja ) -->
              <?php else: ?>
                <li class="nav-item active">
                  <button class="btn btn-primary" > <a href="login.php"><font color="white">Login</font></a></button>
                </li>
              <?php endif ?>
            </ul>
          </div>
        </div>
      </nav>

      <br><br><br>

      <div class="container">
        <div class="row"> 
          <div class="col md-4">
            <h1 class="text-primary">Checkout Belanja</h1>
            <hr>
          </div>
          
          <div class="col md-2">
            <div class="card bg-warning text-light text-center border-light">
              <h3 class="font-weight-bold">No. Meja <?php echo $_SESSION ["meja"] ['no_meja']; ?> </h3>
            </div>
            <div class="col md-2">
              
            </div>
            
          </div>      
        </div>
      </div>


      <br>
      <section class="konten">
        <div class="container">
          <table class="table table-bordered" bgcolor="#DCDCDC">
            <thead>
              <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Subharga</th>
              </tr>
            </thead>
            <tbody bgcolor="#F5F5F5">
              <tr>
                <?php $nomor= 1; ?>
                <?php $totalbelanja = 0; ?>
                <?php foreach ($_SESSION["keranjang"] as $id_menu => $jumlah): ?>


                  <!--  menampilkan produk yang sedang diperulaangkan berdasarkan id_menu -->
                  <?php 
                  $ambil=$koneksi->query("SELECT * FROM menu WHERE id_menu='".$id_menu."'");
                  $pecah=$ambil->fetch_assoc();
                  $subharga = $pecah["harga_menu"] * $jumlah;

                  ?> 

                  <td> <?php echo $nomor; ?> </td>
                  <td>  <?php echo $pecah ["nama_menu"]; ?> </td>
                  <td> Rp. <?php echo number_format($pecah ["harga_menu"]); ?> </td>
                  <td> <?php echo $jumlah; ?> </td>
                  <td> Rp. <?php echo number_format($subharga);  ?></td>
                </tr>
                <?php $nomor++; ?>
                <?php $totalbelanja+=$subharga; ?>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th colspan="4">Total Belanja</th>
                <th>Rp <?php echo number_format($totalbelanja); ?></th>
              </tr>


            </tfoot>
          </table>



          <a href="checkoutok.php" class="btn btn-danger">Checkout</a>

        </div>
      </section>

      <br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br>
      <footer class=" footer-light bg-light text-dark font-weight-bold">
        <div class="container pt-3">
          <div class="row text-center text-info">
            <div class="col">
              <p> RuTE 15 | 2019</p>
            </div>
          </div>
        </div>
      </footer>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



    </body>
    </html>