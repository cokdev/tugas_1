<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id             = $_POST['id'];
$kd_transaksi   = $_POST['kd_transaksi'];
$kd_barang      = $_POST['kd_barang'];
$nama_barang    = $_POST['nama_barang'];
$harga          = $_POST['harga'];
$jlh_beli       = $_POST['jlh_beli'];

$total_belanja = $harga * $jlh_beli;

// menginput data ke database
mysqli_query($koneksi, "update tbl_pembelian set kd_transaksi='$kd_transaksi',
nama_barang='$nama_barang' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");