<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Foto Carousel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Kelola Foto Carousel</h1>

   <h1><a href="admin.php">kembali</a></h1>
    <div class="card mt-4">
        <div class="card-header bg-primary text-white">Upload Foto Baru</div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Judul Foto</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Pilih Foto</label>
                    <input type="file" name="image" id="image" class="form-control" required>
                </div>
                <button type="submit" name="upload" class="btn btn-success">Upload Foto</button>
            </form>
        </div>
    </div>

  
    <div class="card mt-4">
        <div class="card-header bg-danger text-white">Daftar Foto</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['title']; ?></td>
                        <td><img src="<?= $row['image_path']; ?>" alt="<?= $row['title']; ?>" width="100"></td>
                        <td>
                            
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                <button type="submit" name="delete" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
