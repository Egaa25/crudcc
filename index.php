<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Pengguna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Daftar Pengguna</h2>
<a href="create.php">+ Tambah Pengguna</a>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    $result = $conn->query("SELECT * FROM users");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>".$no++."</td>
            <td>".$row['nama']."</td>
            <td>".$row['email']."</td>
            <td>
                <a href='edit.php?id=".$row['id']."'>Edit</a> | 
                <a href='delete.php?id=".$row['id']."' onclick='return confirm(\"Hapus data ini?\")'>Hapus</a>
            </td>
        </tr>";
    }
    ?>
</table>
</body>
</html>