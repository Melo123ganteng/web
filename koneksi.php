<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "webkua";


$koneksi = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi Gagal : " . mysqli_connect_error();
}

?>