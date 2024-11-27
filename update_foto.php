<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $carousel_type = $_POST['carousel_type'];
    $image = $_FILES['image'];

    if (!empty($image['name'])) {
        $target_dir = "images/";
        $target_file = $target_dir . basename($image['name']);
        move_uploaded_file($image['tmp_name'], $target_file);

        $query = "UPDATE carousel SET title = '$title', image_path = '$target_file', carousel_type = '$carousel_type' WHERE id = $id";
    } else {
        $query = "UPDATE carousel SET title = '$title', carousel_type = '$carousel_type' WHERE id = $id";
    }

    mysqli_query($conn, $query);
    header('Location: index.php');
}
?>
