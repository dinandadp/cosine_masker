<?php
include 'header2.php';
?>

<section class="content" style="background-color: #FCF9F9; color: #000000">
    <div class="row">

        <div class="col-md-12">
            <div class="box" style="font-family: BrandonText-Light; font-size: 12.5px; letter-spacing: 0.7px; color: #A8A4A5; border-color: #D5375B">
                <div class="box-header" style="color:#000000; left: 43%">
                    <h3 class="box-title" style="font-family: BrandonText-Regular; letter-spacing: 1.5px">Tambah Masker</h3>
                </div>

                <form class="form-horizontal" method="POST" action="">
                    <div class="box-body">

                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul <label style="color: #D5375B">*</label></label>
                            <textarea class="form-control" name="txtjudul" style="border-radius: 5px" required></textarea>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis <label style="color: #D5375B">*</label></label>
                            <textarea class="form-control" name="txtpenulis" style="border-radius: 5px" required></textarea>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="link" class="form-label">Link <label style="color: #D5375B">*</label></label>
                            <textarea class="form-control" name="txtlink" style="border-radius: 5px" required></textarea>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="abstrak" class="form-label">Abstrak <label style="color: #D5375B">*</label></label>
                            <textarea class="form-control" name="txtabstrak" style="border-radius: 5px" required></textarea>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="kesimpulan" class="form-label">Kesimpulan <label style="color: #D5375B">*</label></label>
                            <textarea class="form-control" name="txtkesimpulan" style="border-radius: 5px" required></textarea>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="manfaat" class="form-label">Manfaat <label style="color: #D5375B">*</label></label>
                            <textarea class="form-control" name="txtmanfaat" style="border-radius: 5px" required></textarea>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="bahan" class="form-label">Bahan <label style="color: #D5375B">*</label></label>
                            <textarea class="form-control" name="txtbahan" style="border-radius: 5px" required></textarea>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="cara_pembuatan" class="form-label">Cara Pembuatan <label style="color: #D5375B">*</label></label>
                            <textarea class="form-control" name="txtcara_pembuatan" style="border-radius: 5px" required></textarea>
                        </div>
                        <br>

                    </div>
                    <div class="box-footer" style="background-color:#FFFFFF">
                        <input type="submit" name="btnsimpan" class="btn pull-right" style="font-family: BrandonText-Regular; background-color: #000000; color: #FFFFFF; letter-spacing: 1.5px" value="SUBMIT">
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
                    $txtcara_pembuatan = $_POST['txtcara_pembuatan']; {
                        $simpan = mysqli_query($konek, "INSERT INTO tbl_masker (judul, penulis, link, abstrak, kesimpulan, manfaat, bahan, cara_pembuatan) VALUES ('$txtjudul','$txtpenulis','$txtlink','$txtabstrak','$txtkesimpulan','$txtmanfaat','$txtbahan','$txtcara_pembuatan')");
                        if ($simpan) {
                ?>
                            <script type="text/javascript">
                                alert('Data Berhasil di Simpan');
                                document.location.href = "masker_tampil.php";
                            </script>
                <?php
                        } else {
                            echo "<script type='text/javascript'>alert('Gagal Untuk Menyimpan!');</script>";
                        }
                    }
                } // }Akhir data double pat 
                ?>
            </div>
        </div>
</section>
</div>

<?php include 'footer.php'; ?>