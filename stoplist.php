<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        @font-face {
            font-family: 'BrandonText-Light';
            src: url('font/BrandonText-Light.otf');
        }

        .contents {
            position: fixed;
            top: 19.6%;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 7.5%;
            background-color: #F9EEF1;
            color: #837A7D;
        }

        .contents p {
            font-family: BrandonText-Light;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 0.5px;
            text-align: center;
            position: absolute;
            top: 31%;
            left: 2%;
        }
    </style>
</head>

<div class="contents">
    <p>Data Stopword List</p>
</div>

<section class="content">
    <div class="row">
        <div class="col-md-3" style="color: #A83A44">
            <h3 style="font-family: BrandonText-Regular; font-size: 20px">Data Stopword List</h3>
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

        </body>

    </div>
    </div>
</section>

</html>
<?php include 'footer.php'; ?>