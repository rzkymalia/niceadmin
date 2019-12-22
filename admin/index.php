<?php 
session_start();
// koneksi ke database
$koneksi= new mysqli ("localhost", "root", "", "menufix");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>ADMIN</title>

  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="../assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="../assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="../css/widgets.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet" />
  <link href="../css/xcharts.min.css" rel=" stylesheet">
  <link href="../css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    ======================================================= -->
    <style type="">
      body{
        font-family: century gothic;
      }
    </style>
  </head>

  <body>
    <!-- container section start -->
    <section id="container" class="">


      <header class="header dark-bg">
        <div class="toggle-nav">
          <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="index.php" class="logo">ADMIN<span class="lite"></span></a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">
          <!--  search form start -->
          <ul class="nav top-menu">

          </ul>
          <!--  search form end -->
        </div>

        <div class="top-nav notification-row">
          <!-- notificatoin dropdown start-->
          <ul class="nav pull-right top-menu">


            <!-- task notificatoin start -->

            <!-- task notificatoin end -->
            <!-- inbox notificatoin start-->
            
          </header>
          <!--header end-->

          <!--sidebar start-->
          <aside>
            <div id="sidebar" class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                <li class="active">
                  <a class="" href="index.php?halaman=home.php">
                    <i class="icon_house_alt"></i>
                    <span>Home</span>
                  </a>
                </li>

                <li class="sub-menu">
                  <a href="index.php?halaman=menu" class="">
                    <i class="icon_table"></i>
                    <span href="index.php">Menu</span>
                  </a>
                </li>
                <li class="sub-menu">
                  <a href="index.php?halaman=pelanggan" class="">
                    <i class="icon_table"></i>
                    <span href="index.php">Pelanggan</span>
                  </a>
                </li>
                <li class="sub-menu">
                  <a href="index.php?halaman=pemesanan" class="">
                    <i class="icon_table"></i>
                    <span href="index.php">Pemesanan</span>
                  </a>
                </li>
                <li class="sub-menu">
                  <a href="index.php?halaman=pembelian" class="">
                    <i class="icon_table"></i>
                    <span href="index.php">Pembelian</span>
                  </a>
                </li>
                <li class="sub-menu">
                  <a href="index.php?halaman=pembayaran" class="">
                    <i class="icon_table"></i>
                    <span href="index.php">Pembayaran</span>
                  </a>
                </li>
                <li class="sub-menu">
                  <a href="index.php?halaman=logout" class="">
                    <i class="icon_table"></i>
                    <span href="logout.php">Logout</span>
                  </a>
                </li>
              </ul>
              <!-- sidebar menu end-->
            </div>
          </aside>


          <section id="main-content">
            <section class="wrapper">



             <?php 
             if (isset($_GET['halaman']))
             {
              if ($_GET['halaman']=="menu") {
                include 'menu.php';
              }
              elseif ($_GET['halaman']=="pelanggan") {
                include 'pelanggan.php';
              }
              elseif ($_GET['halaman']=="pembelian") {
                include 'pembelian.php';
              }
              elseif ($_GET['halaman']== "pembayaran") {
                include 'pembayaran.php';
              }
              elseif ($_GET['halaman']== "pemesanan") {
                include 'pemesanan.php';
              }
              elseif($_GET['halaman']== "detail"){
                include 'detail.php';
              }
              elseif ($_GET['halaman']=="tambahmenu"){
                include 'tambahmenu.php';
              }
              elseif ($_GET['halaman']=="hapusmenu") {
                include 'hapusmenu.php';
              }
              elseif ($_GET['halaman']=="ubahmenu"){
                include 'ubahmenu.php';
              }
              elseif ($_GET['halaman']=="hapuspesanan"){
                include 'hapuspesanan.php';
              }
              elseif ($_GET['halaman']=="logout"){
                include 'logout.php';
              }
            }
            else
            {
              include 'home.php';
            }

            ?>
          </div>
        </div>
      </div>




      <!--sidebar end-->

      <!--main content start-->
      <!--overview start-->



      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="../js/jquery.js"></script>
  <script src="../js/jquery-ui-1.10.4.min.js"></script>
  <script src="../js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="../js/jquery.scrollTo.min.js"></script>
  <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="../assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="../js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="../js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
  <!-- Full Google Calendar - Calendar -->
  <script src="../assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
  <!--script for this page only-->
  <script src="../js/calendar-custom.js"></script>
  <script src="../js/jquery.rateit.min.js"></script>
  <!-- custom select -->
  <script src="../js/jquery.customSelect.min.js"></script>
  <script src="../assets/chart-master/Chart.js"></script>

  <!--custome script for all page-->
  <script src="../js/scripts.js"></script>
  <!-- custom script for this page-->
  <script src="../js/sparkline-chart.js"></script>
  <script src="../js/easy-pie-chart.js"></script>
  <script src="../js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="../js/jquery-jvectormap-world-mill-en.js"></script>
  <script src="../js/xcharts.min.js"></script>
  <script src="../js/jquery.autosize.min.js"></script>
  <script src="../js/jquery.placeholder.min.js"></script>
  <script src="../js/gdp-data.js"></script>
  <script src="../js/morris.min.js"></script>
  <script src="../js/sparklines.js"></script>
  <script src="../js/charts.js"></script>
  <script src="../js/jquery.slimscroll.min.js"></script>
  <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

  </body>

  </html>
