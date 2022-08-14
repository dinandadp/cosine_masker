<?php include 'header.php';
error_reporting(0);
?>

<section class="content">
    <div class="row">
        <div class="col-md-3" style="color: #A83A44">
            <h3 style="font-family: BrandonText-Regular; font-size: 20px">Data Pembanding</h3>
        </div>

        <body>
            <div class="container; col-md-12" style="margin-top: 20px">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="text-align: center;margin-bottom: 30px"></h2>
                        <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="5%">NO</th>
                                    <th>ISI DOKUMEN</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $data = mysqli_query($konek, 'SELECT * FROM tbl_pembanding');
                                $no = 1;
                                while ($d = mysqli_fetch_array($data)) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['isi_dok']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </body>

    </div>
    </div>
</section>

<?php include 'footer.php'; ?>