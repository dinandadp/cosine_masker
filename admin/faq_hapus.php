<?php
include 'koneksi.php';
if (isset($_GET["setvaliddatamasker"])) {
    $qry = mysqli_query($konek, "delete from tbl_faq where id='" . $_GET["setvaliddatamasker"] . "'");
    if ($qry) {
        header('location: faq_tampil.php');
    }
}
