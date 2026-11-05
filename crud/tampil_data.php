<?php
// memanggil file koneksi.php untuk menghubungkan ke database
include 'config/koneksi.php';

// Ambil Data dari Database
$query = "SELECT * FROM pengurus ORDER BY id ASC";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD</title>
</head>
<body>
    <h1>Ambil Data</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>GENDER</th>
            <th>ALAMAT</th>
            <th>GAJI</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['gaji']; ?></td>
            </tr>
        <?php } ?>
    </table>
        
</body>
</html>