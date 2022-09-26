<?php
// menghapus session saja
session_start();
$_SESSION = [];
session_unset();
session_destroy();
// menghapus session untuk cookie
setcookie('id', '', time()-3600);
setcookie('key', '', time()-3600);

header("location: login.php");

?>