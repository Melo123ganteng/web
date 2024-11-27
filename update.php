<?php
// insert.php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $judul = $_POST['judul'];
    $waktu = $_POST['waktu'];
    $deskripsi = $_POST['deskripsi'];
   
  

    $sql = "INSERT INTO tab1 (judul, waktu,deskripsi) VALUES ('$judul', '$waktu', '$deskripsi')";

    if ($koneksi->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    $koneksi->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="update.php">update</a>
     <h1><a href="admin.php">kembali </a></h1>
</body>
</html>