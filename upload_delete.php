<?php
include 'koneksi.php';


if (isset($_POST['upload'])) {
    $fileName = $_FILES['image']['name'];
    $fileTmp = $_FILES['image']['tmp_name'];
    $uploadDir = 'images/';

    if (move_uploaded_file($fileTmp, $uploadDir . $fileName)) {
        $title = $_POST['title'];
        $query = "INSERT INTO carousel (title, image_path) VALUES ('$title', '$uploadDir$fileName')";
        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Foto berhasil diupload!');</script>";
        } else {
            echo "<script>alert('Gagal menyimpan ke database: " . mysqli_error($koneksi) . "');</script>";
        }
    } else {
        echo "<script>alert('Gagal mengupload foto ke server!');</script>";
    }
}


if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $query = "SELECT image_path FROM carousel WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (file_exists($row['image_path'])) {
            unlink($row['image_path']);
        }
        $deleteQuery = "DELETE FROM carousel WHERE id = '$id'";
        mysqli_query($koneksi, $deleteQuery);
        echo "<script>alert('Foto berhasil dihapus!');</script>";
    } else {
        echo "<script>alert('Foto tidak ditemukan!');</script>";
    }
}


$query = "SELECT * FROM carousel";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}
?>
