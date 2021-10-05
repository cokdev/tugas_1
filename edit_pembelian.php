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
        <div class="row">
            <?php
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "select * from tbl_pembelian where id='$id'");
            while ($getdt = mysqli_fetch_array($data)) {
            ?>
            <form class="col s12" action="proses_update.php" method="POST">
                <div class="row">

                    <div class="input-field col s6">
                        <i class="material-icons prefix">border_color</i>
                        <input type="text" name="id" value="<?= $getdt['id']; ?>">
                        <input id="kd_transaksi" name="kd_transaksi" type="text" value="<?= $getdt['kd_transaksi']; ?>">
                        <label for="kd_transaksi">Kode Transaksi</label>
                    </div>
                    <div class="input-field col s6">
                        <i class="material-icons prefix">bookmark</i>
                        <input id="kd_barang" name="kd_barang" type="text" value="<?= $getdt['kd_barang']; ?>" readonly>
                        <label for="kd_barang">Kode Barang</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="nama_barang" name="nama_barang" type="text" value="<?= $getdt['nama_barang']; ?>">
                        <label for="nama_barang">Nama Barang</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s8">
                        <input id="harga" name="harga" type="text" value="<?= $getdt['harga']; ?>" readonly>
                        <label for="harga">Harga Barang</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="jlh_beli" name="jlh_beli" type="text" value="<?= $getdt['jlh_beli']; ?>" readonly>
                        <label for="jlh_beli">Jumlah Beli</label>
                    </div>
                </div>

                <div class="row">
                    <button class="btn waves-effect yellow darken-3" type="submit" name="action">UPDATE DATA
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
            <?php } ?>
        </div>

    </div>
</body>

</html>