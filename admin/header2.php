<?php
include 'koneksi.php';
include 'valid.php';
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rekomendasi Masker Wajah Tradisional Berdasarkan Penelitian Ilmiah Menggunakan Cosine Similarity dan TF-IDF</title>
    <link href="gambar/logo_.png" rel="shortcut icon">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

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

    <!-- select -->

    <!-- akhir select -->

    <style type="text/css">
        @font-face {
            font-family: 'Halimun';
            src: url('font/Halimun.ttf');
        }

        @font-face {
            font-family: 'BrandonText-Light';
            src: url('font/BrandonText-Light.otf');
        }

        @-moz-keyframes fade-in {
            0% {
                opacity: 0;
            }

            65% {
                opacity: 1;
            }
        }

        @-webkit-keyframes fade-in {
            0% {
                opacity: 0;
            }

            65% {
                opacity: 1;
            }
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
            }

            65% {
                opacity: 1;
            }
        }

        @font-face {
            font-family: 'BrandonText-Regular';
            src: url('font/BrandonText-Regular.otf');
        }

        @font-face {
            font-family: 'BrandonText-Light';
            src: url('font/BrandonText-Light.otf');
        }
    </style>
</head>

<body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="beranda.php" class="logo" style="background-color: #FFFFFF">
                <span class="logo-mini" style="background-color:#FFFFFF; color: #000000"><b>+</b></span>

                <div class="user-panel" style="bottom: 12px; right: 9px">
                    <div class="pull-left image">
                        <img src="gambar/logo_.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info" style="top: 12px; left: 20px; width: 100%">
                        <h5 style="font-family: Halimun; font-size: 50%; color: #A83A44"><span class="logo-lg"><b>Rekomendasi Masker Wajah Tradisional</span></h5>
                    </div>
                </div>
            </a>

            <nav class="navbar navbar-static-top" style="background-color: #F791BA; font-family: BrandonText-Light; font-size: 12.5px; letter-spacing: 0.5px">
                </i><a href="beranda.php" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav">
                        <li>
                            <a data-toggle="control-sidebar">
                                <marquee style="color: #000000"><i class="fas fa-laptop-code" style="color: #000000"> </i> Rekomendasi Masker Wajah Tradisional Berdasarkan Penelitian Ilmiah Menggunakan Cosine Similarity dan TF-IDF </marquee>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar" style="font-family: BrandonText-Light; font-size: 11px; background-color: #FFFFFF; letter-spacing:1.5px">
            <section class="sidebar">
                <ul class="sidebar-menu">
                    <li>
                        <a href="beranda.php" style="color: #000000; top: 15px">
                            <i class=" fa fa-home"></i><span>BERANDA</span>
                        </a>
                    </li>

                    <li>
                        <a href="stoplist.php" style="color: #000000; top: 15px">
                            <i class="fa fa-tasks"></i><span>STOPWORD LIST</span>
                        </a>
                    </li>

                    <li>
                        <a href="kata_dasar.php" style="color: #000000; top: 15px">
                            <i class="fa fa-tasks"></i><span>KATA DASAR</span>
                        </a>
                    </li>

                    <li>
                        <a href="faq_tampil.php" style="color: #000000; top: 15px">
                            <i class="fa fa-comments"></i><span>FAQ</span>
                        </a>
                    </li>

                    <li>
                        <a href="masker_tampil.php" style="color: #000000; top: 15px">
                            <i class="fa fa-table"></i><span>MASKER WAJAH TRADISIONAL</span>
                        </a>
                    </li>

                    <li>
                        <a href="pembanding.php" style="color: #000000; top: 15px">
                            <i class="fa fa-code-compare"></i><span>PEMBANDING</span>
                        </a>
                    </li>

                    <li>
                        <a href="hasil_preprocessing.php" style="color: #000000; top: 15px">
                            <i class="fa fa-square-poll-horizontal"></i><span>HASIL PREPROCESSING</span>
                        </a>
                    </li>

                    <li>
                        <a href="logout.php" style="color: #000000; top: 15px">
                            <i class="fa fa-times"></i> <span>LOGOUT</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper" style="background-color: #FCF9F9">
            <!-- Content Header (Page header) -->
            <section class="content-header">

                <ol class="breadcrumb">
                    <li><a style="color: #000000; font-family: BrandonText-Light; font-size: 12px; letter-spacing: 1.5px" href="beranda.php"><i class="fas fa-sync-alt"></i> Refresh</a></li>
                </ol>
                <br>
            </section>
</body>