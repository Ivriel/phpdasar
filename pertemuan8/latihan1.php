<?php
require 'functions.php';
$dbconection = mysqli_connect("localhost", "root", "", "phpdasar");
function query($query){
    global $dbconection;
    $result = mysqli_query($dbconection, $query);
    $rows =[];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
$mahasiswa=query("SELECT * FROM mahasiswa");

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
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td>
                <img src="<?= $row["gambar"]; ?>" width="50" height="50" alt="">
            </td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>