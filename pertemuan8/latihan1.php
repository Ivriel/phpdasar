<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa"); // ambil data mahasiswa berdasarkan id

if (isset($_GET["cari"])) {
    $mahasiswa = find($_GET["keyword"]);
}

// ambil data dari object result (fetch)
// mysqli_fetch_row()
// mysqli_fetch_assoc()
// mysqli_fetch_array()
// mysqli_fetch_object()

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>
<a href="tambah.php">Tambah data mahasiswa</a>
<br/>
<form action="" method="get">
    <input type="text" name="keyword" placeholder="cari mahasiswa" autofocus autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
</form>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row): ?>
        <tr>
            <td align="center"><?= $i; ?></td>
            <td align="center">
                <a href="update.php?id=<?= $row["id"]?>">ubah</a>
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('You sure wanna to delete?')">hapus</a>
            </td>
            <td align="center">
                <img src="<?= $row["gambar"]; ?>" width="50" height="50" alt="">
            </td>
            <td align="center"><?= $row["nrp"]; ?></td>
            <td align="center"><?= $row["nama"]; ?></td>
            <td align="center"><?= $row["email"]; ?></td>
            <td align="center"><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>