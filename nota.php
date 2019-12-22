<?php 
session_start();
$koneksi = new mysqli ("localhost", "root", "", "menufix");

//jika tidak ada session meja  (belum login) maka dilarikan ke login php
if (!isset($_SESSION["meja"])) {
  echo "<script> alert('silahkan login');</script>";
  echo "<script> location='login.php'; </script>";
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Nota</title>
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
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light  bg-light fixed-top mb-3">
    <div class="container">
      <h1> <a class="navbar-brand font-weight-bold text-warning" href="#">Kafe Rute 15</a> </h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-4 ">
          <li class="nav-item dropdown">
            <a class="nav-link text-info dropdown-toggle font-weight-bold" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="makanan.php">Makanan</a>
              <a class="dropdown-item" href="minuman.php">Minuman</a>
              <a class="dropdown-item" href="snack.php"> Snack</a>
              <a class="dropdown-item" href="dessert.php">Dessert</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-info font-weight-bold"  href="#" >Home <span class="sr-only">(Current)</span></a>
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
              <button class="btn btn-danger"><a href="logout.php"><font color="white">Logout</font></a></button>
              <!-- Selain itu (belum ada session meja ) -->
              <?php else: ?>
                <button type="button" class=" text-light"><a href="login.php">Login</a></button>
              <?php endif ?>

            </ul>
          </div>
        </div>
      </nav>

      <?php
        $noOrder = $_SESSION['orderNumber'];    //ambil no order dari sesi orderNumber
        $total = $_SESSION['totalOrder'];       //ambil total belanja dari sesi totalOrder
        $noMeja =  $_SESSION ["meja"] ['no_meja'];
        date_default_timezone_set('ASIA/JAKARTA');
        
        $md = date("Gi");
        $tbh = date("jn");
        $tanggalSkrg = date("Y-m-d");

        ?>

        <br><br><br>

       <div class="container">
        <div class="row"> 
          <div class="col md-4">
            <h1 class="text-primary">Nota Belanja</h1>
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

        <section class="konten">
          <div class="container">
            <table class="table table-bordered", bgcolor="#DCDCDC">
              <thead>
                <tr>
                  <th>No</th>
                  <th>No Order</th>
                  <th>Nama Menu</th>
                  <th>Harga</th>
                  <th>Jumlah</th>
                  <th>Subharga</th>
                </tr>
              </thead>
              <tbody bgcolor="#F5F5F5">
                <?php $nomor=1; ?>
                <?php $ambil=$koneksi->query("SELECT * FROM pemesanan_menu WHERE id_pemesanan = '".$noOrder."' "); ?>
                <?php while ($pecah = $ambil->fetch_assoc()){ ?>
                  <tr>
                    <td><?php echo $nomor; ?></td>
                    <td> <?php echo $noOrder; ?></td>
                    <td><?php echo $pecah['nama_menu']; ?></td>
                    <td>Rp.<?php echo number_format($pecah['harga']); ?></td>
                    <td><?php echo $pecah['jumlah']; ?></td>
                    <td>Rp.<?php echo number_format($pecah['subharga']); ?></td>
                  </tr>
                  <?php $nomor++; ?>
                <?php } ?>
              </tbody>    
              <tfoot>
                <tr>
                  <td class="font-weight-bold" colspan="5"> Total Pesanan Anda </td>
                  <td class="font-weight-bold">Rp.<?php echo number_format($total); ?></td>
                </tr>
              </tfoot>
            </table>
          </div>
        </section>









        <br><br><br><br><br><br><br><br><br>
        <br><br><br><br> <br> <br><br><br><br>
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