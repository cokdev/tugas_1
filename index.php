<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PEMBELIAN BARANG | KEDE CEKASENG</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="nav-wrapper indigo darken-4">
            <a href="#" class="brand-logo center">TOKO CEKASENG</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="./">Beranda</a></li>
                <li><a href="input_pembelian.php">Form Pembelian</a></li>
                <li><a href=""></a></li>
            </ul>
        </div>
    </nav>
    <div class="container" style="margin-top: 10px;">
        <div class="col s8">
            <h4>DATA PEMBELIAN BARANG</h4>
        </div>
        <div class="row">
            <table class="responsive-table striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Barang</th>
                        <th>Kode Transaksi</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Jumlah Beli</th>
                        <th>Total Harga</th>
                        <!-- <th>Option</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from tbl_pembelian");
                    while ($get_row = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $get_row['kd_barang'] ?></td>
                        <td><?= $get_row['kd_transaksi'] ?></td>
                        <td><?= $get_row['nama_barang'] ?></td>
                        <td><?= $get_row['harga'] ?></td>
                        <td><?= $get_row['jlh_beli'] ?></td>
                        <td><?= $get_row['total_belanja'] ?></td>
                        <!-- <td><a href="edit_pembelian.php?id=<?= $get_row['id']; ?>"
                                class="waves-effect waves-light btn-small"><i class="material-icons left">create</i>
                                Edit</a> | <a href=""></a></td> -->
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="col s8">
            <h4>DATA STOK BARANG</h4>
        </div>
        <div class="row">
            <table class="responsive-table striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from tbl_stok_barang");
                    while ($get_row = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $get_row['kd_barang'] ?></td>
                        <td><?= $get_row['nama_barang'] ?></td>
                        <td><?= $get_row['jlh_stok'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>