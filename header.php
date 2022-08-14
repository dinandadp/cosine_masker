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

    <style type="text/css">
        * {
            margin: 0px;
            padding: 0px;
            font-family: sans-serif;
        }

        ul {
            float: bottom;
            margin-top: 35px;
        }

        ul li {
            display: inline-block;
        }

        @font-face {
            font-family: 'BrandonText-Regular';
            src: url('font/BrandonText-Regular.otf');
        }

        ul li a {
            font-family: BrandonText-Regular;
            text-decoration: none;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1.5px;
            color: #000000;
            padding: 5px 20px;
            border: 1.5px solid #000000;
            border-radius: 20px;
            transition: 0.3s;
            margin: 10px;

        }

        ul li a:hover {
            background-color: #A83A44;
            color: #FFFFFF;
            border: 1.5px solid #A83A44;
        }

        ul li.active a {
            background-color: #A83A44;
            color: #FFFFFF;
            border: 1.5px solid #A83A44;
        }

        .navbar {
            max-width: 100px;
            margin: auto;
        }

        .navbar ul {
            position: absolute;
            top: 8%;
            left: 7.5%;
        }

        @font-face {
            font-family: Halimun;
            src: url('font/Halimun.ttf');
        }

        .header h2 {
            font-family: Halimun;
            font-size: 30px;
            color: #A83A44;
            position: absolute;
            top: 0%;
            left: 17.5%;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="header">
            <h2>Rekomendasi Masker Wajah Tradisional</h2>
        </div>
        <div>
            <ul>
                <li class="active"><a href="index.php">BERANDA</a></li>
                <li><a href="stoplist.php">STOPWORD LIST</a></li>
                <li><a href="#">KATA DASAR</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">MASKER WAJAH TRADISIONAL</a></li>
                <li><a href="#">PENCARIAN</a></li>
                <li><a href="admin/index.php">LOGIN</a></li>
            </ul>
        </div>

    </div>
</body>

</html>
<?php include 'footer.php'; ?>