<?php 
session_start();
// koneksi ke database
$koneksi = new mysqli ("localhost", "root", "", "menufix");
?>

<!DOCTYPE html>
<head>
  <title> Minuman </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="font_awesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
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
        <ul class="navbar-nav ml-auto mr-4">
          <li class="nav-item dropdown">
            <a class="nav-link text-info dropdown-toggle font-weight-bold" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="makanan.php">Makanan</a>
              <a class="dropdown-item" href="minuman.php">Minuman</a>
              <a class="dropdown-item" href="snack.php"> Snack</a>
              <a class="dropdown-item" href="dessert.php">Dessert</a>
            </div>
            <li class="nav-item active">
              <a class="nav-link  text-info font-weight-bold " href="index.php">Home<span class="sr-only">(current) </span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link  text-info font-weight-bold" href="carapesan.php">Cara Pesan <span class="sr-only">(current) </span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link  text-info font-weight-bold" href="keranjang.php">Keranjang<span class="sr-only">(current) </span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link  text-info font-weight-bold " href="checkout.php">Checkout <span class="sr-only">(current) </span></a>
              </li>
            <!-- Jika sudah login (ada session meja) -->
            <?php if (isset($_SESSION["meja"])): ?>
              <li class="nav-item active">
                <button class="btn btn-danger"><a href="logout.php"><font color="white"> Logout</font></a></button>
              </li>
              <!-- Selain itu (belum ada session meja ) -->
              <?php else: ?>
                <li class="nav-item active">
                <button class="btn btn-priimary"><a href="login.php"><font color="white"> Login</font></a></button>
                </li>
              <?php endif ?>
              
            </ul>
          </div>
        </div>
      </nav>

      <br> <br>  <br>

     <div class="container">
        <div class="row"> 
         <div class="col sm-2">
         </div>
         <div class="col sm-2">
         </div>
         <div class="col sm-2">
          <div class="card border-light bg-warning">
           <h3 class="text-center text-light font-weight-bold">No. Meja : <?php echo $_SESSION ["meja"] ['no_meja']; ?> </h3>
         </div>
         <div class="col sm-2">
         </div>
       </div>      
     </div>
   </div>
   <br>

     
 <section class="konten">
    <div class="container">
      <div class="row">
       <div class="col md-4">
       </div>
       <div class="col md-4">
        <div class="card border-info bg-info border-light">
         <h1 class=" text-center font-weight-bold text-light"> Daftar Menu</h1>
         <h3 class="text-center font-weight-bold text-light">"Minuman"</h3>
       </div>
     </div>
     <div class="col md-4">

     </div>
   </div>
   <br>

        <div class="row">

          <!-- join tabel menu dengan tabel kategori                         -->
          <?php $ambil=$koneksi-> query ("SELECT * FROM  menu INNER JOIN kategori ON menu.id_kategori = kategori.id_kategori WHERE kategori.nama_kategori = 'minuman' ");  ?>
          <?php while ($perproduk = $ambil->fetch_assoc()){ ?>


            <div class="card  ml-4 mb-3 border-info bg-light" style="width: 16rem;">
              <img src="foto_menu/<?php echo $perproduk['foto_menu']; ?>" width="255px" height="255px">
              <div class="card-body">
               <h5 class="card-title text-center font-weight-bold text-info"><?php echo $perproduk ['nama_menu']; ?> </h5>
               <h6 class="text-center text-info">"<?php echo $perproduk ['deskripsi_menu']; ?>"</h6>
                <h5 class="card-title text-center text-info">Rp. <?php  echo number_format($perproduk ['harga_menu']); ?> </h5> </center>
                <center><a href="beli.php?id=<?php echo $perproduk ['id_menu']; ?>" class="btn btn-primary">  Beli</a> </center>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>
  </div>

</section>



<br><br><br><br><br>

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