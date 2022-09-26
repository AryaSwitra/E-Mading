<?php

require '../functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM data WHERE judul LIKE '%$keyword%' OR kontak LIKE '%$keyword%'";
$tempat = query($query);

?>
<div class="col-lg-auto">

          
          <div class="row">
          <?php foreach ($tempat as $row) : ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="img/<?= $row["gambar"]; ?>">
                  <img class="card-img-top" src="img/<?= $row["gambar"]; ?>" alt="" width="428px" height="284px">
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
                </div>
              </div>
            </div>
          <?php endforeach ; ?>
          </div>
        </div>
