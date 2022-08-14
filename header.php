<?php
include 'admin/koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rekomendasi Masker Wajah Tradisional Berdasarkan Penelitian Ilmiah Menggunakan Cosine Similarity dan TF-IDF</title>
    <link href="gambar/logo_.png" rel="shortcut icon">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- CSS UNTUK LOADING -->
    <link rel="stylesheet" href="plugins/pace/pace.min.css">
    <!--  -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <div class="header">
            <h2>Rekomendasi Masker Wajah Tradisional</h2>
        </div>
        <ul>
            <li <?php if (strpos($_SERVER['REQUEST_URI'], "index.php") !== false) { ?> class="active" <?php } ?>><a href="index.php">BERANDA</a></li>
            <li <?php if (strpos($_SERVER['REQUEST_URI'], "stoplist.php") !== false) { ?> class="active" <?php } ?>><a href="stoplist.php">STOPWORD LIST</a></li>
            <li><a href="#">KATA DASAR</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">MASKER WAJAH TRADISIONAL</a></li>
            <li><a href="#">PENCARIAN</a></li>
            <li><a href="admin/index.php">LOGIN</a></li>
        </ul>
    </div>