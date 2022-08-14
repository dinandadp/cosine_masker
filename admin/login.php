<?php
include 'koneksi.php';
if (isset($_POST["btnlogin"])) {
  $txtusername = $_POST['txtusername'];
  $txtpassword = $_POST['txtpassword'];

  $cek = mysqli_query($konek, "SELECT * FROM tbl_admin where username='" . $_POST['txtusername'] . "' AND password='" . $_POST['txtpassword'] . "'");
  $hasil = mysqli_fetch_array($cek);
  $count = mysqli_num_rows($cek);

  $username1 = $hasil['username'];
  $nama1 = $hasil['nama_admin'];
  $foto1 = $hasil['file'];
  if ($count > 0) {
    session_start();
    $_SESSION['username'] = $username1;
    $_SESSION['nama_admin'] = $nama1;
    $_SESSION['file'] = $foto1;
    header("location:beranda.php");
  } else {
    // echo "";
  }
}
?>
<div class="pages_agile_info_w3l page_error">
  <div class="over_lay_agile_pages_w3ls error">
    <div class="registration error">
      <br><br><br>
      <h1 align="center">Login Salah!</h1>
      <br><br><br><br><br><br><br><br><br>
      <h1 align="center"><a href="index.php">Coba Lagi</a>
        <h1>
    </div>


  </div>
</div>