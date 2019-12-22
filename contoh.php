<?php 
session_start();
// koneksi ke database
$koneksi = new mysqli ("localhost", "root", "", "menufix");
?>

<!DOCTYPE html>
<head>
  <title> contoh</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="font_awesome/css/all.min.css">
  <link rel="stylesheet" href="admin/style.css ">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
  <br>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light  bg-dark fixed-top mb-3">
    <div class="container">
      <h1> <a class="navbar-brand font-weight-bold text-light" href="#">Kafe Rute 15</a> </h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-4">
          <li class="nav-item active">
            <a class="nav-link  text-light" href="index.php">Menu<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link  text-light" href="carapesan.php">Cara Pesan <span class="sr-only">(current) </span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link  text-light" href="keranjang.php">Keranjang<span class="sr-only">(current) </span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link  text-light" href="checkout.php">Checkout <span class="sr-only">(current) </span></a>
          </li>


        </ul>

        <!-- icon -->
        <div class="icon">
          <h3> <a href="cart.php"><i class="fas fa-shopping-cart text-light  mr-3 ml-3"></i> </a>

          </h3>

        </div>
      </div>
    </div>
  </nav>

  <br> <br> <br> 
  <!-- Ini Carousel -->
  <div class="container">
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner"> 
      <div class="carousel-item active"> 
        <img src="img/rute.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/rute2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/rute3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<br>

<h4 class="text-center text-danger">MENU</h4> <br>

<!-- Ini CARD KECIL -->
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Makanan</h5>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Minuman</h5>
        </div>
      </div>
    </div>
  </div>
</div>



<br>

<section class="konten">
  <div class="container">
    <h1> &nbsp Produk</h1>
    <div class="row">


      <?php $ambil=$koneksi-> query ("SELECT * FROM  menu ");  ?>
      <?php while ($perproduk = $ambil->fetch_assoc()){ ?>

        <div class="card ml-4 mb-3" style="width: 16rem;">
          <img src="foto_menu/<?php echo $perproduk['foto_menu']; ?>" width="250px" height="250px">
          <div class="card-body">
            <h5 class="card-title"><?php echo $perproduk ['nama_menu']; ?> </h5>
            <a href="beli.php?id=<?php echo $perproduk ['id_menu']; ?>" class="btn btn-primary btn-lg"> beli</a>
            <button href="<?php echo $perproduk ['deskripsi_menu']; ?>" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">deskripsi</button>
           


   </div>
        </div>
      

    <?php } ?>


  </div>
</div>

</section>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>