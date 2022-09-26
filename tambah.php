<?php
// CRUD = Create
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

// // ambil data dalam tiap elemen di dalam form
if (isset($_POST["submit"])) {
	// "fungsi var_dubm yaitu untuk menampilkan isi dari variabel" semisalnya variabel global $_POST,$_POST,$_FILES dll
	// fungsi die untuk supaya tidak menjalankan script berikutnya
	// var_dump($_POST); 
	// var_dump($_FILES); die;

// 	$nim = $_POST["nim"];
// 	$nama = $_POST["nama"];
// 	$email = $_POST["email"];
// 	$jurusan = $_POST["jurusan"];
// 	$gambar = $_POST["gambar"];

	if (tambah($_POST) > 0 ) {
		// echo "data berhasil di tambahkan";
		// perintah memberikan notifikasi menggunakan javascript
		echo "
			<script>
			alert('data berhasil ditambahkan!');
			document.location.href = 'tampilan_event2.php';
			</script>
		";
	}
	else{
		// echo "data gagal di tambahkan";
		echo "
			<script>
			alert('data gagal ditambahkan!');
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
	<title>Tambahkan data</title>
	<link rel="stylesheet" type="text/css" href="css/styletambah.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <link rel="stylesheet" href="scss/style.css">
        <!-- Bootstrap core CSS -->
    <link href="framework/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="tambahbox">
<h1>Tambahkan Data</h1>
	<!-- form akan di kelola dua jalur untuk inputan string/text di kolola oleh post dan untuk 
		 inputan gambar/file akan di kelola oleh entype dengan variabel global $_FILE -->
	<form action="" method="post" enctype="multipart/form-data">
		<!-- funsi element required yaitu untuk memberikan notif bahwa inputan harus di lengkapi -->
		<ul>
			<li>
				<label for="judul">Judul</label>
				<br>
				<input type="text" name="judul" id="judul" required size="30">
			</li>
			<li>
				<label for="deskripsi">Deskripsi</label>
				<br>
				<textarea rows="4" cols="50" name="deskripsi" id="deskripsi" style="height: 100px" required placeholder="Masukan Deskripsi Singkat...(1000 karakter)"></textarea>
			</li>
			<li>
				<label for="kontak">kontak</label>
				<br>
				<input type="text" name="kontak" id="kontak" required>
			</li>
			<li>
				<label for="tanggal">tanggal</label>
				<br>
				<input type="datetime-local" name="tanggal" id="tanggal" required>
			</li>
			<li>
				<label for="gambar">Gambar</label>
				<br>
				<input type="file" name="gambar" id="gambar" required style="color: white;">
			</li>
			<br>
			<button type="submit" name="submit" class="btn btn-outline-primary" >Masukan</button>
			<br>
			<br>
			<a href="tampilan_event2.php" class="btn btn-danger">kembali</a>
		</ul>
	</form>
</div>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>