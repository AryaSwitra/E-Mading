<?php
// CRUD = Update
	session_start();
	if (!isset($_SESSION["login"])) {
		header("location: login.php");
		exit;
	}

require 'functions.php';

// $a=mysqli_connect("localhost", "root", "", "project1");

// if (isset($_POST["submit"])) {
// 	var_dump($_POST);
// }

$id = $_GET['id'];
// mengambil data mahasiswa dengan indeks 0 pd array
$ganti = query("SELECT * FROM data WHERE id = $id")[0];


// // ambil data dalam tiap elemen di dalam form
if (isset($_POST["submit"])) {

// 	$nim = $_POST["nim"];
// 	$nama = $_POST["nama"];
// 	$email = $_POST["email"];
// 	$jurusan = $_POST["jurusan"];
// 	$gambar = $_POST["gambar"];

	if (ubah($_POST) > 0 ) {
		// echo "data berhasil di tambahkan";
		// perintah memberikan notifikasi menggunakan javascript
		echo "
			<script>
			alert('data berhasil diubah!');
			document.location.href = 'tampilan_event2.php';
			</script>
		";
	}
	else{
		// echo "data gagal di tambahkan";
		echo "
			<script>
			alert('data gagal diubah!');
			document.location.href = 'tampilan_event2.php';
			</script>
		";
	}
}

// // query insert data

// $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";

// mysqli_query ($a, $query);

// if (mysqli_affected_rows($a) > 0 ) {
// 	echo "Berhasil";
// }
// else{
// 	echo "Gagal";
// 	echo "<br>";
// 	echo mysqli_error($a);
// }

?>

<!DOCTYPE html>
<html>
<head>
	<title>ubah data</title>
	<link rel="stylesheet" type="text/css" href="css/styleubah.css">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <link rel="stylesheet" href="scss/style.css">
        <!-- Bootstrap core CSS -->
    <link href="framework/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="ubahbox">
<h1>ubah Data</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<!-- input bertype hidden untuk menyembunyikan tag inputan -->
		<input type="hidden" name="id" value="<?= $ganti["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $ganti["gambar"]; ?>">
		<ul>
			<li>
				<label for="judul">Judul</label>
				<br>
				<input type="text" name="judul" id="judul" size="30" value="<?= $ganti["judul"]; ?>">
			</li>
			<li>
				<label for="deskripsi">Deskripsi</label>
				<br>
				<textarea name="deskripsi" id="deskripsi" cols="68" rows="5"><?= $ganti["deskripsi"]; ?></textarea>
			</li>
			<li>
				<label for="kontak">kontak</label>
				<br>
				<input type="text" name="kontak" id="kontak" value="<?= $ganti["kontak"]; ?>" >
			</li>
			<li>
				<label for="tanggal">tanggal</label>
				<br>
				<input type="datetime-local" name="tanggal" id="tanggal" value="<?= $ganti["tanggal"]; ?>" >
			</li>
			<li>
				<label for="gambar">Gambar</label>
				<br>
				<a href="img/<?= $ganti['gambar']; ?>" class="perbesar">
				<img src="img/<?= $ganti['gambar']; ?>" width="40px">
				</a>
				<input type="file" name="gambar" id="gambar" style="color: white;">		
			</li>
			<br>
			<div style="transform: translate(60%, -51%);">
			<button type="submit" name="submit" class="btn btn-outline-primary">Update</button>
			</div>
			<div style="margin-left: 120px; transform: translate(70%, -150%);">
			<a href="tampilan_event2.php" class="btn btn-danger">kembali</a>
			</div>
		</ul>

	</form>

</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>