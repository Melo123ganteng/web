<?php
session_start();

// Kata sandi yang benar (misalnya, hardcoded)
$correct_password = "dewaganteng";  // Ganti dengan kata sandi yang Anda inginkan

// Proses login
if (isset($_POST['submit'])) {
    $password = $_POST['password'];

    // Cek apakah kata sandi yang dimasukkan benar
    if ($password === $correct_password) {
        // Set session untuk menandakan login berhasil
        $_SESSION['logged_in'] = true;
        // Arahkan ke halaman berikutnya
        header("Location: admin.php");
        exit();
    } else {
        $error_message = "Kata sandi salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Masukkan Kata Sandi</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <?php
        if (isset($error_message)) {
            echo "<div class='alert alert-danger'>$error_message</div>";
        }
        ?>
        <button type="submit" name="submit" class="btn btn-primary">Masuk</button>
    </form>
</div>
</body>
</html>
