<?php
include 'header2.php';
$setvaliddatamasker = ($_GET["setvaliddatamasker"]);
$sqlku = mysqli_query($konek, "SELECT * FROM tbl_masker WHERE id='$setvaliddatamasker'");
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
                            <label for="judul" class="form-label">Judul <label style="color: #D5375B">*</label></label>
                            <textarea class="form-control" name="txtjudul" style="border-radius: 5px" value="<?php echo $d['judul'] ?>" required></textarea>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis <label style="color: #D5375B">*</label></label>
                            <textarea class="form-control" name="txtpenulis" style="border-radius: 5px" value="<?php echo $d['penulis'] ?>" required></textarea>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="link" class="form-label">Link <label style="color: #D5375B">*</label></label>
                            <textarea class="form-control" name="txtlink" style="border-radius: 5px" value="<?php echo $d['link'] ?>" required></textarea>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="abstrak" class="form-label">Abstrak <label style="color: #D5375B">*</label></label>
                            <textarea class="form-control" name="txtabstrak" style="border-radius: 5px" value="<?php echo $d['abstrak'] ?>" required></textarea>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="kesimpulan" class="form-label">Kesimpulan <label style="color: #D5375B">*</label></label>
                            <textarea class="form-control" name="txtkesimpulan" style="border-radius: 5px" value="<?php echo $d['Kesimpulan'] ?>" required></textarea>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="manfaat" class="form-label">Manfaat <label style="color: #D5375B">*</label></label>
                            <textarea class="form-control" name="txtmanfaat" style="border-radius: 5px" value="<?php echo $d['Manfaat'] ?>" required></textarea>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="bahan" class="form-label">Bahan <label style="color: #D5375B">*</label></label>
                            <textarea class="form-control" name="txtbahan" style="border-radius: 5px" value="<?php echo $d['Bahan'] ?>" required></textarea>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="cara_pembuatan" class="form-label">Cara Pembuatan <label style="color: #D5375B">*</label></label>
                            <textarea class="form-control" name="txtcara_pembuatan" style="border-radius: 5px" value="<?php echo $d['cara_pembuatan'] ?>" required></textarea>
                        </div>
                        <br>

                    </div>
                    <div class="box-footer" style="background-color:#FFFFFF">
                        <input type="submit" name="btnsimpan" class="btn pull-right" style="font-family: BrandonText-Regular; background-color: #000000; color: #FFFFFF; letter-spacing: 1.5px" value="SAVE">
                    </div>
                </form>

                <?php

                if (isset($_POST["btnsimpan"])) {
                    $txtjudul = $_POST['txtjudul'];
                    $txtpenulis = $_POST['txtpenulis'];
                    $txtlink = $_POST['txtlink'];
                    $txtabstrak = $_POST['txtabstrak'];
                    $txtkesimpulan = $_POST['txtkesimpulan'];
                    $txtmanfaat = $_POST['txtmanfaat'];
                    $txtbahan = $_POST['txtbahan'];
                    $txtcara_pembuatan = $_POST['txtcara_pembuatan'];
                    $edit = mysqli_query($konek, "UPDATE  tbl_masker SET judul='$txtjudul',penulis='$txtpenulis',link='$txtlink',abstrak='$txtabstrak',kesimpulan='$txtkesimpulan',manfaat='$txtmanfaat',bahan='$txtbahan',cara_pembuatan='$txtcara_pembuatan' WHERE id='$setvaliddatamasker'");
                    if ($edit) {
                ?>
                        <script type="text/javascript">
                            alert('Data Berhasil di Edit');
                            document.location.href = "masker_tampil.php";
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