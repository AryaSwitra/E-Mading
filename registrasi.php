<?php
//session_start();

require 'functions.php';
 // if (!isset($_SESSION["login"])) {
  //  header("location: login.php");
   // exit;
//  }

if (isset($_POST["register"])) {
	
	if (registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil di tambahkan!!');
				document.location.href = 'login.php';
			  </script>";
	}else{
		echo mysqli_error($a);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>registrasi</title>
	<link rel="stylesheet" type="text/css" href="css/styleregistrasi.css">

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
<div class="registrasibox">
<h1>Registrasi</h1>
<form action="" method="post">
	<ul>
		<li>
			<label for="username">username :</label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">password :</label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<label for="password2">konfirmasi password :</label>
			<input type="password" name="password2" id="password2">
		</li>
		<br>
		<button type="submit" name="register" class="btn btn-outline-primary" >Register</button>
		<br>
		<br>
		<a href="tugas2.php" class="btn btn-danger">kembali</a>
	</ul>
</form>
</div>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>