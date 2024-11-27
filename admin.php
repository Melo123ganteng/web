<?php
session_start();


if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  
    header("Location: sandi.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php">kembali</a>
    </h1>
    <h1>Edit</h1>
    <h1><a href="acara.php">acara</a></h1>
    <br>
    <br>
    <h1><a href="upload_foto.php">foto</a></h1>
</body>
</html>