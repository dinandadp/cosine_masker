<?php include 'header.php'; ?>

<div class="contents">
    <p>Data Stopword List</p>
</div>


<section class="content">
    <div class="container isi-content">
        <div class="row">
            <div class="col-md-12">
                <table id="mytable" class="table table-striped table-bordered" width="100%">
                    <thead>
                        <tr>
                            <th width="5%">NO</th>
                            <th>STOPWORD</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $data = mysqli_query($konek, 'SELECT * FROM tbl_stoplist');
                        $no = 1;
                        while ($d = mysqli_fetch_array($data)) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['stopword']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>