<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = "SELECT * FROM carousel WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    
    <label for="title">Judul:</label>
    <input type="text" name="title" id="title" value="<?= $row['title'] ?>" required>
    
    <label for="carousel_type">Pilih Carousel:</label>
    <select name="carousel_type" id="carousel_type" required>
        <option value="Akad Nikah" <?= $row['carousel_type'] == 'Akad Nikah' ? 'selected' : '' ?>>Akad Nikah</option>
        <option value="Menghadiri Acara" <?= $row['carousel_type'] == 'Menghadiri Acara' ? 'selected' : '' ?>>Menghadiri Acara</option>
        <option value="Binwin" <?= $row['carousel_type'] == 'Binwin' ? 'selected' : '' ?>>Binwin</option>
        <option value="Dokumentasi" <?= $row['carousel_type'] == 'Dokumentasi' ? 'selected' : '' ?>>Dokumentasi</option>
    </select>

    <label for="image">Pilih Gambar (opsional):</label>
    <input type="file" name="image" id="image" accept="image/*">
    
    <button type="submit" name="submit">Update</button>
</form>
