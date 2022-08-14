<?php include 'header.php';
error_reporting(0);
?>

<form action="import_excel.php" method="POST" enctype="multipart/form-data">
    <div class="col-md-3">
        <input type="file" name="filemasker" class="form-control" required>
    </div>
    <div class="col-md-2">
        <button type="submit" class="btn btn-success">IMPORT</button>
    </div>
</form>

<section class="content">
    <div class="row">
        <div class="col-md-4" style="color: #A83A44">
            <h3 style="font-family: BrandonText-Regular; font-size: 20px"><a href="masker_tambah.php">Input Data</a> | Data Masker Wajah Tradisional</h3>
        </div>

        <body>
            <div class="container col-md-12" style="margin-top: 20px">
                <div class="row">
                    <div class="col-md-12">
                        <h2 style="text-align: center;margin-bottom: 30px"></h2>
                        <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="5%">NO</th>
                                    <th>JUDUL</th>
                                    <th>PENULIS</th>
                                    <th>LINK</th>
                                    <th>ABSTRAK</th>
                                    <th>KESIMPULAN</th>
                                    <th>MANFAAT</th>
                                    <th>BAHAN</th>
                                    <th>CARA PEMBUATAN</th>
                                    <th width="15%">ACTION</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $data = mysqli_query($konek, 'SELECT * FROM tbl_masker');
                                $no = 1;
                                while ($d = mysqli_fetch_array($data)) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['judul']; ?></td>
                                        <td><?php echo $d['penulis']; ?></td>
                                        <td><?php echo $d['link']; ?></td>
                                        <td><?php echo $d['abstrak']; ?></td>
                                        <td><?php echo $d['kesimpulan']; ?></td>
                                        <td><?php echo $d['manfaat']; ?></td>
                                        <td><?php echo $d['bahan']; ?></td>
                                        <td><?php echo $d['cara_pembuatan']; ?></td>
                                        <td style="letter-spacing: 3px"><a href="faq_edit.php?setvaliddatamasker=<?php echo ($d['id']); ?>" style="color: orange" class="fa fa-edit"></a>
                                            | <a onClick="return confirm('Anda Yakin Ingin Menghapus ?')" href="faq_hapus.php?setvaliddatamasker=<?php echo $d['id']; ?>" style="color: red" class="fa fa-trash"></a>
                                        </td>
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