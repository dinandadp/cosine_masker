<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'cosine_masker';
$konek = mysqli_connect($server, $user, $password, $database);
if ($konek) {
	echo "";
} else {
	echo "GAGAL KONEK KE DATABASE";
}
