<?php
// $host = 'localhost';
// $username = 'root';
// $password = '';
// $db_name = 'coba_db'; // nama databasenya
// $conn = new mysqli($host, $username, $password, $db_name);

$koneksi = mysqli_connect("localhost", "root", "", "coba_db");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}