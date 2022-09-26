  <?php 
  // CRUD = Read
  require 'functions.php';

  $tempat=query("SELECT * FROM data ");

   if (isset($_POST["cari"])) {
    $tempat = cari($_POST["keyword"]);
   }

   ?>

<!DOCTYPE html>
<html lang="en" >
  <head>

    <meta charset="utf-8">
    

    <title>Event</title>

        <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="scss/style.css">

    <!-- Bootstrap core CSS -->
    <link href="framework/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css2/clean-blog.min.css" rel="stylesheet">


  </head>

  <body>

<!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bd-navbar fixed-top">
  <a class="navbar-brand" style="color: white;">E-Mading</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="tugas.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="" method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" type="text" name="keyword" id="keyword">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="cari" id="tombol-cari">Search</button>
    </form>
  </div>
</nav>

    <!-- Page Content -->

  <header class="masthead" style="background-image: url('Image index/bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1>WELCOME</h1>
            <h2>TO</h2>
            <span><h3>STIKOM BALI</h3></span>
        </div>
      </div>
    </div>
  </header>

<!-- card box -->
<div id="isicontainer">
    <div class="col-lg-auto">

          
          <div class="row">
          <?php foreach ($tempat as $row) : ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="img/<?= $row["gambar"]; ?>">
                  <img class="card-img-top" src="img/<?= $row["gambar"]; ?>" alt="gambar event" width="428px" height="284px">
                </a>
                <div class="card-body">
                  <h4 class="card-title">
                    <h4 style="color: blue;" class="perbesar"><?= $row["judul"]; ?></h4>
                  </h4>
                  <p class="card-text"><?= $row["deskripsi"]; ?></p>
                  <br>
                </div>
                <div class="card-footer">
                  <small class="text-muted"><?= $row["kontak"]; ?></small>
                  <br>
                  <small class="text-muted"><?= $row["tanggal"]; ?></small>
                </div>
              </div>
            </div>
          <?php endforeach ; ?>
          </div>
        </div>
        </div>
        
          <!-- /.row -->
<br>
<br>


    <!-- Footer -->
    <footer class="py-5 navbar-dark bd-navbar ">
        <p class="m-0 text-center text-warning  ">Copyright &copy; E-Mading </p>
    </footer>

    <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
  </body>

</html>
