<?php
include 'header2.php';
$setvaliddatamasker = ($_GET["setvaliddatamasker"]);
$sqlku = mysqli_query($konek, "SELECT * FROM tbl_faq WHERE id='$setvaliddatamasker'");
$d  = mysqli_fetch_array($sqlku);

function query($query)
{
    $konek = mysqli_connect("localhost", "root", '', 'cosine_masker');
    $result = mysqli_query($konek, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>
<section class="content" style="background-color: #FCF9F9; color: #000000">
    <div class="row">

        <div class="col-md-12">
            <div class="box" style="font-family: BrandonText-Light; font-size: 12.5px; letter-spacing: 0.7px; color: #A8A4A5; border-color: #D5375B">
                <div class="box-header" style="color:#000000; left: 43%">
                    <h3 class="box-title" style="font-family: BrandonText-Regular; letter-spacing: 1.5px">Edit FAQ</h3>
                </div>

                <form class="form-horizontal" method="POST" action="">
                    <div class="box-body">

                        <div class="mb-3">
                            <label for="pertanyaan" class="form-label">Pertanyaan <label style="color: #D5375B">*</label></label>
                            <input type="text" class="form-control" name="txtpertanyaan" style="border-radius: 5px" value="<?php echo $d['pertanyaan'] ?>" required>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="jawaban" class="form-label">Jawaban <label style="color: #D5375B">*</label></label>
                            <input type="text" class="form-control" name="txtjawaban" style="border-radius: 5px" value="<?php echo $d['jawaban'] ?>" required>
                        </div>

                    </div>
                    <div class="box-footer" style="background-color:#FFFFFF">
                        <input type="submit" name="btnsimpan" class="btn pull-right" style="font-family: BrandonText-Regular; background-color: #000000; color: #FFFFFF; letter-spacing: 1.5px" value="SAVE">
                    </div>
                </form>

                <?php

                if (isset($_POST["btnsimpan"])) {
                    $txtpertanyaan = $_POST['txtpertanyaan'];
                    $txtjawaban = $_POST['txtjawaban'];
                    $edit = mysqli_query($konek, "UPDATE  tbl_faq SET pertanyaan='$txtpertanyaan',jawaban='$txtjawaban' WHERE id='$setvaliddatamasker'");
                    if ($edit) {
                ?>
                        <script type="text/javascript">
                            alert('Data Berhasil di Edit');
                            document.location.href = "faq_tampil.php";
                        </script>
                <?php
                    } else {
                        echo "Terjadi kesalahan";
                    }
                }
                ?>
            </div>
        </div>
</section>
</div>
<?php
include 'footer.php';
?>