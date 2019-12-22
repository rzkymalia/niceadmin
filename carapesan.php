<?php 
session_start();
// koneksi ke database
$koneksi = new mysqli ("localhost", "root", "", "menufix");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <title> Pelanggan</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="font_awesome/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="style.css">
 <style>
  body{
    font-family: Century Gothic;
    background-image: url(gambar/bgawal.jpg);   
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
        <ul class="navbar-nav ml-auto mr-4 ">
          <li class="nav-item dropdown">
            <a class="nav-link text-dark dropdown-toggle font-weight-bold" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="makanan.php">Makanan</a>
              <a class="dropdown-item" href="minuman.php">Minuman</a>
              <a class="dropdown-item" href="snack.php"> Snack</a>
              <a class="dropdown-item" href="dessert.php">Dessert</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-dark font-weight-bold"  href="#" >Home <span class="sr-only">(Current)</span></a>
            <li class="nav-item active">
              <a class="nav-link  text-dark font-weight-bold" href="carapesan.php">Cara Pesan <span class="sr-only">(current) </span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link  text-dark font-weight-bold" href="keranjang.php">Keranjang<span class="sr-only">(current) </span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link  text-dark font-weight-bold" href="checkout.php">Checkout <span class="sr-only">(current) </span></a>
            </li>
            <!-- Jika sudah login (ada session meja) -->
            <?php if (isset($_SESSION["meja"])): ?>
              <button type="button" class=" text-dark"><a href="logout.php">Logout</a></button>
              <!-- Selain itu (belum ada session meja ) -->
              <?php else: ?>
                <button type="button" class=" text-light"><a href="login.php">Login</a></button>
              <?php endif ?>

            </ul>
          </div>
        </div>
      </nav>
      <br>
      <div class="container"><br><br><br>
        <h1 class="text-light ">Cara Memesan Makanan </h1>
        <br>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">NO</th>
              <th scope="col">KETERANGAN</th>
              <th scope="col">GAMBAR</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Buka Web Browser anda (google chrome, browser, safari dll) </td>
              <td><img src="lainlain/google.jpg"></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td> Buka link www.kaferute15.com</td>
              <td>Thornton</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Anda akan diarahkan ke halaman </td>
              <td>the Bird</td>
            </tr>
          </tbody>
        </table>

        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
      </div>

      <br><br><br><br><br><br>
      <br><br><br>
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