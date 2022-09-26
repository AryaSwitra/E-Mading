<?php

require 'functions.php';
session_start();

// cek cookie 
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];
	// mengambil username berdasarkan id
	$result = mysqli_query($a,"SELECT username FROM user WHERE id = $id");

	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if ($key === hash('sha256', $row['username'])) {
		$_SESSION['login'] = true;
	}

}


if ( isset($_SESSION["login"])) {
	header("Location: tugas2.php");
	exit;
}

if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($a, "SELECT * FROM user WHERE username = '$username' ");

	// cek username
	if (mysqli_num_rows($result) === 1) {

	// cek password
		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"]) ) {

	// set session
		$_SESSION["login"] = true;
		$_SESSION["akun_id"] = $row["id"];

	// cek remember me
		if (isset($_POST['remember']) ) {
			// buat cookie
			// setcookie('login', 'true', time()+60);
			setcookie('id', $row['id'], time()+60);
			// decrypt username menggunakan hash algo sha256
			setcookie('key', hash('sha256', $row['username']),time()+60);

		}
			header("Location: tugas2.php");
			exit;
		}
	}

	$error = true;

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>halaman login</title>
	<link rel="stylesheet" type="text/css" href="css/styleLogin.css">
	
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
<div class="loginbox">
<h1>Login</h1>
<?php if (isset($error)) { ?>
	<p style="color: red; font-style: italic">username/password salah atau belum di masukan</p>
<?php } ?>
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
			<input type="checkbox" name="remember" id="remember">
			<label for="remember">Remember Me !</label>
		<br>
		<button type="submit" class="btn btn-outline-primary" name="login">login</button>
		<br>
		<br>
		<a href="tugas.php" class="btn btn-danger">Home</a>
		</div>
	</ul>
</form>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>