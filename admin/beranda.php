<?php
include 'header.php';
?>

<section class="content" style="background-color:#FFFFFF; color: #000000">
  <div class="row">
    <?php
    $data1 = mysqli_query($konek, "SELECT * FROM tbl_stoplist");
    $stoplist = mysqli_num_rows($data1);
    ?>

    <?php
    $data2 = mysqli_query($konek, "SELECT * FROM tbl_kata_dasar");
    $kata_dasar = mysqli_num_rows($data2);
    ?>

    <?php
    $data3 = mysqli_query($konek, "SELECT * FROM tbl_faq");
    $faq = mysqli_num_rows($data3);
    ?>

    <?php
    $data4 = mysqli_query($konek, "SELECT * FROM tbl_masker");
    $masker = mysqli_num_rows($data4);
    ?>

    <?php
    $data5 = mysqli_query($konek, "SELECT * FROM tbl_pembanding");
    $pembanding = mysqli_num_rows($data5);
    ?>

    <?php
    $data6 = mysqli_query($konek, "SELECT * FROM tbl_hasil_preprocessing");
    $hasil_preprocessing = mysqli_num_rows($data6);
    ?>
    <br>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box" style="background-color:#DA4040">
        <div class="inner">
          <center>
            <div class="icon-center">
              <i class="fa fa-tasks fa-4x" style="color:white"></i>
              <h3 style="color:white; margin-top: 15px;"><?php echo $stoplist; ?></h3>
            </div>
          </center>
        </div>
        <a href="stoplist.php" class="small-box-footer" style="background-color:#AA3E3E; font-family: BrandonText-Regular; font-size: 13px">JUMLAH STOPWORD LIST <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box" style="background-color:#F0C969">
        <div class="inner">
          <center>
            <div class="icon-center">
              <i class="fa fa-tasks fa-4x" style="color:white"></i>
              <h3 style="color:white; margin-top: 15px;"><?php echo $kata_dasar; ?> <sup style=" font-size: 20px"></sup></h3>
            </div>
          </center>
        </div>
        <a href="kata_dasar.php" class="small-box-footer" style="background-color:#C69E3D; font-family: BrandonText-Regular; font-size: 13px">JUMLAH KATA DASAR <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box" style="background-color:#82D376">
        <div class="inner">
          <center>
            <div class="icon-center">
              <i class="fa fa-comments fa-4x" style="color:white"></i>
              <h3 style="color:white; margin-top: 15px;"><?php echo $faq; ?></h3>
            </div>
          </center>
        </div>
        <a href="faq_tampil.php" class="small-box-footer" style="background-color:#4A963E; font-family: BrandonText-Regular; font-size: 13px">JUMLAH FAQ <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box" style="background-color:#60C8B5">
        <div class="inner">
          <center>
            <div class="icon-center">
              <i class="fa fa-table fa-4x" style="color:white"></i>
              <h3 style="color:white; margin-top: 15px;"><?php echo $masker; ?></h3>
            </div>
          </center>
        </div>
        <a href="masker_tampil.php" class="small-box-footer" style="background-color:#3F918D; font-family: BrandonText-Regular; font-size: 13px">JUMLAH MASKER WAJAH TRADISIONAL <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box" style="background-color:#E674D1">
        <div class="inner">
          <center>
            <div class="icon-center">
              <i class="fa fa-code-compare fa-4x" style="color:white"></i>
              <h3 style="color:white; margin-top: 15px;"><?php echo $pembanding; ?></h3>
            </div>
          </center>
        </div>
        <a href="pembanding.php" class="small-box-footer" style="background-color:#9E4A8E; font-family: BrandonText-Regular; font-size: 13px">JUMLAH PEMBANDING <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <div class="small-box" style="background-color:#E32472">
        <div class="inner">
          <center>
            <div class="icon-center">
              <i class="fa fa-square-poll-horizontal fa-4x" style="color:white"></i>
              <h3 style="color:white; margin-top: 15px;"><?php echo $hasil_preprocessing; ?> <sup style="font-size: 20px"></sup></h3>
            </div>
          </center>
        </div>
        <a href="hasil_preprocessing.php" class="small-box-footer" style="background-color:#B01E5A; font-family: BrandonText-Regular; font-size: 13px">JUMLAH HASIL PREPROCESSING <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>

</section>
</div>
<?php
include 'footer.php';
?>