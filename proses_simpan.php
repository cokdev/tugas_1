<?php
// koneksi database
include 'koneksi.php';


// menangkap data yang di kirim dari form
$kd_transaksi   = $_POST['kd_transaksi'];
$kd_barang      = $_POST['kd_barang'];
$nama_barang    = $_POST['nama_barang'];
$harga          = $_POST['harga'];
$jlh_beli       = $_POST['jlh_beli'];

$total_belanja = $harga * $jlh_beli;

// menginput data ke database
mysqli_query($koneksi, "insert into tbl_pembelian values('',
'$kd_transaksi',
'$kd_barang',
'$nama_barang',
'$harga',
'$jlh_beli',
'$total_belanja'
)");

// GETQUERY STOK
$data = mysqli_query($koneksi, "select * from tbl_stok_barang where kd_barang='$kd_barang'");
$dt_brg = mysqli_fetch_array($data);
$ck_brg = mysqli_num_rows($data);

$stok_total = $dt_brg['jlh_stok'] + $jlh_beli;

// INPUT DATA KE STOK
if ($ck_brg != 0) {
    mysqli_query($koneksi, "update tbl_stok_barang set jlh_stok='$stok_total' where kd_barang='$kd_barang'");
} else {
    mysqli_query($koneksi, "insert into tbl_stok_barang values('',
    '$kd_barang',
    '$nama_barang',
    '$jlh_beli'
    )");
}

// mengalihkan halaman kembali ke index.php
header("location:index.php");