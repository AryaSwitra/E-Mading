<?php
    session_start();
  if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	  <link rel="stylesheet" href="scss/style.css">
        <!-- Bootstrap core CSS -->
    <link href="framework/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <title>Home</title>

  </head>
  <body >
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bd-navbar">
  <a class="navbar-brand" style="color: white;">E-Mading</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="logout.php">Log Out</a>
          <a class="dropdown-item" href="tampilan_event2.php">Data Event</a>
          <a class="dropdown-item" href="registrasi.php">Registrasi</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!-- carousel -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="gambar/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h1 class="display-4 font-weight-normal">WELCOME</h1>
        <p class="lead font-weight-normal" style="text-align: center;">TO</p>
        <p class="lead font-weight-normal" style="text-align: center;">STIKOM BALI</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="gambar/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <font color="#1a1a1a">
        <h1 class="display-4 font-weight-normal">WELCOME</h1>
        <font color="#000000">
        <p class="lead font-weight-normal" style="text-align: center;">TO</p>
        <p class="lead font-weight-normal" style="text-align: center;">STIKOM BALI</p>
        </font>
        </font>
      </div>
    </div>
  </div>
</div>
<br>
<br>

<!-- section -->
 <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img"><img src="Image index/SK.png" height="380px" class="d-block w-100"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Sistem Komputer</h2>
          <p class="lead mb-0">Membentuk individu dan team  yang paham dan mampu di dalam menganalisis, merancang, serta mengoperasikan komputer terlebih lagi pengelolaan sistem komputer baik untuk bisnis maupun riset.</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img"><img src="Image index/SI.png" height="380px" class="d-block w-100"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Sistem Informasi</h2>
          <p class="lead mb-0">Membentuk individu yang mampu menganalisis dan merancang serta mengoperasikan fungsi hardware yang tepat guna serta mampu mengelola sistem baik untuk kepentingan riset maupun bisnis.</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img"><img src="Image index/MI.png" height="380px" class="d-block w-100"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Manajemen Informatika</h2>
          <p class="lead mb-0">Membentuk individu dan team yang paham dan mampu di dalam menganalisis, merancang, serta mengoperasikan komputer  terlebih lagi pengelolaan sistem informasi baik untuk bisnis maupun riset.</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img"><img src="Image index/DD.png" height="380px" class="d-block w-100"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Dual Degree</h2>
          <p class="lead mb-0">The learning process is conducted in STIKOM Bali but get two degrees all at once; there are S.Kom from STIKOM Bali and BIT from HELP University Malaysia.</p>
        </div>
      </div>
    </div>
  </section>

<br>
<br>
<br>
<br>
    <!-- Footer -->
    <footer class="py-5 navbar-dark bd-navbar">
      <div class="container">
        <p class="m-0 text-center text-warning  ">Copyright &copy; E-Mading </p>
      </div>
    </footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </body>
</html>