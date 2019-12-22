<?php 
session_start();
// koneksi ke database
$koneksi = new mysqli ("localhost", "root", "", "menufix");
?>

<!DOCTYPE html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <title> Pelanggan</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="font_awesome/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <style>
  body{
    font-family: Century Gothic;
    background-image: url(foto_menu/aroma.jpg);
   /* -webkit-filter: blur(10px);
    -moz-filter: blur(10px);
    -o-filter: blur(10px);
    -ms-filter: blur(10px);
    filter: blur(10px);*/
  }
  .container .row .col-sm-6 .card .card-body{
    background-color: light ;
  }
  
  .navbar-brand .font-weight-bold .text-dark{
    background-color: blue;

  }
  .navbar{
    background-color: blue;
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
                <button class="btn btn-primary"><a href="login.php"><font color="white">Login</font></a></button>
              <?php endif ?>

            </ul>
          </div>
        </div>
      </nav>

      <br> <br> <br> 

      <div class="container">
        <div class="row"> 
         <div class="col -2">
         </div>
         <div class="col md-2">
         </div>
         
         <div class="card col md-4 text-right bg-warning border-light">
           <h3 class="text-light text-center font-weight-bold"> No. Meja <?php echo $_SESSION ["meja"] ['no_meja']; ?> </h3>
         </div>
       </div>      
     </div>
     <br>

     <div class="container">
      <div class="row">
       <div class="col md-4">
        
       </div>
     <div class="col md-4">
      <div class="card border-info bg-info">
         <h1 class="text- text-center font-weight-bold text-light"> Daftar Menu</h1>
       </div>
     </div>
     <div class="col sm-4">
       
     </div>
   </div>
 </div>
</div>


 <br><br>
 <!-- Ini CARD KECIL -->
 <div class="container">
  <div class="row">
    <div class="col-md-6 mb-3">
      <div class="card bg-light border-info ">
        <a href="makanan.php">
          <div class="card-body">
            <h5 class="card-title font-weight-bold text-center text-info">Makanan</h5>
            <center><img src="menuandalan/hamburger.png" width="130px"> </center>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <div class="card bg-light border-info">
        <a href="minuman.php">
          <div class="card-body">
            <h5 class="card-title font-weight-bold text-center text-info">Minuman </h5>
            <center><img src="menuandalan/minumann.png" width="80px"></h5></center>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <div class="card bg-light border-info">
        <a href="snack.php">
          <div class="card-body">
            <h5 class="card-title font-weight-bold text-center text-info">Snack</h5>
            <center><img src="menuandalan/rotbak.png" width="150px"> </center>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <div class="card bg-light border-info">
        <a href="dessert.php">
          <div class="card-body">
            <h5 class="card-title font-weight-bold text-center text-info">Dessert</h5>
            <center><img src="menuandalan/eskrim.png" width="135px"></center>
          </div>
        </a>
      </div>
    </div>
  </div>


</div>
</div>
</div>



<br><br>
<footer class="footer-light bg-light text-info font-weight-bold">
  <div class="container pt-3">
    <div class="row text-center">
      <div class="col">
        <p> RuTE 15 | 2019</p>
        <br>
      </div>
    </div>
  </div>
</footer>










<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>