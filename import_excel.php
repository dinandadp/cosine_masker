<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php
// menghubungkan dengan koneksi
include 'admin/koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['filemasker']['name']);
move_uploaded_file($_FILES['filemasker']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filemasker']['name'], 0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filemasker']['name'], false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index = 0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i = 2; $i <= $jumlah_baris; $i++) {

    // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
    $judul   = $data->val($i, 2);
    $penulis   = $data->val($i, 3);
    $link   = $data->val($i, 4);
    $abstrak   = $data->val($i, 5);
    $kesimpulan   = $data->val($i, 6);
    $manfaat   = $data->val($i, 7);
    $bahan   = $data->val($i, 8);
    $cara_pembuatan   = $data->val($i, 9);

    // input data ke database (table data_pegawai)
    mysqli_query($konek, "INSERT into tbl_masker values('','$judul','$penulis','$link','$abstrak','$kesimpulan','$manfaat','$bahan','$cara_pembuatan')");
    $berhasil++;
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filemasker']['name']);

// alihkan halaman ke index.php
header("location:masker.php");
?>