<?php
// CRUD = Delete
	session_start();
	if (!isset($_SESSION["login"])) {
		header("location: login.php");
		exit;
	}

require 'functions.php';

$id = $_GET["id"];


if (hapus($id) > 0) {
		echo "
			<script>
			alert('data berhasil di Hapus!');
			document.location.href = 'tampilan_event2.php';
			</script>
		";
}

else {
		echo "
			<script>
			alert('data gagal di Hapus!');
			document.location.href = 'tampilan_event2.php';
			</script>
		";
}

?>