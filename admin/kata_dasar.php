<?php include 'header.php';
error_reporting(0);
?>

<section class="content">
    <div class="row">
        <div class="col-md-3" style="color: #A83A44">
            <h3 style="font-family: BrandonText-Regular; font-size: 20px">Data Kata Dasar</h3>
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
                                    <th>KATA DASAR</th>
                                    <th>TIPE KATA</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $data = mysqli_query($konek, 'SELECT * FROM tbl_kata_dasar');
                                $no = 1;
                                while ($d = mysqli_fetch_array($data)) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['kata_dasar']; ?></td>
                                        <td><?php echo $d['tipe_kata']; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#table_id').DataTable();
                });
            </script>
        </body>

    </div>
    </div>
</section>

<?php include 'footer.php'; ?>