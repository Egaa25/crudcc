<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $conn->query("INSERT INTO users (nama, email) VALUES ('$nama', '$email')");
    header("Location: index.php");
    exit; // sangat disarankan untuk menghentikan script setelah redirect
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Pengguna</title>
    <link rel="stylesheet" href="style.css">
    <!-- styling form seperti sebelumnya -->
</head>

<body>
    <div class="form-container">
        <h2>Tambah Pengguna</h2>
        <form method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Simpan">
            </div>
        </form>
    </div>
</body>

</html>