<?php include 'header.php'; ?>

<div class="header-contents">
    <p>Data Stopword List</p>
</div>

<section class="content">
    <div class="isi-content">
        <div class="row">
            <div class="col-md-12">
                <table id="mytable" class="table table-striped table-bordered" width="100%">
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
</section>

<?php include 'footer.php'; ?>