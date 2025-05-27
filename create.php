<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Pengguna</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .form-container {
            background-color: white;
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #343a40;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            color: #555;
        }

        .form-group input[type="text"],
        .form-group input[type="email"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-group input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Tambah Pengguna</h2>
        <form method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Simpan">
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $conn->query("INSERT INTO users (nama, email) VALUES ('$nama', '$email')");
        header("Location: index.php");
    }
    ?>

</body>

</html>