<?php
include 'koneksi.php';
session_start();
if (empty($_SESSION['username'])) {
	// header("location:index.php");
	echo "<h1>Harap Login</H1>";
	die("Anda Belum Login <a href=\"index.php\">Login</a>");
} else {
	// echo "LOGIN BERHASIL";
?>
<?php } ?>
