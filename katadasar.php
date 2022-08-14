<?php include 'header.php'; ?>

<div class="header-contents">
    <p>Data Kata Dasar</p>
</div>


<section class="content">
    <div class="isi-content">
        <div class="row">
            <div class="col-md-12">
                <table id="mytable" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th width="5%">NO</th>
                            <th>Kata Dasar</th>
                            <th>Tipe Kata</th>
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
</section>

<?php include 'footer.php'; ?>