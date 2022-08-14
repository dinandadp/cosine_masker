<?php
include 'koneksi.php';
if (isset($_GET["setvaliddatamasker"])) {
    $qry = mysqli_query($konek, "delete from tbl_maskerwhere id='" . $_GET["setvaliddatamasker"] . "'");
    if ($qry) {
        header('location: masker_tampil.php');
    }
}
