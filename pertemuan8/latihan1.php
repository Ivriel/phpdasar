<?php
$dbconection=mysqli_connect("localhost","root","","phpdasar");
$result = mysqli_query($dbconection,"SELECT * FROM mahasiswa");

// ambil data dari object result (fetch)
// mysqli_fetch_row()
// mysqli_fetch_assoc()
// mysqli_fetch_array()
// mysqli_fetch_object()
$mhs = mysqli_fetch_row($result);
var_dump($mhs[3])
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

        <tr>
            <td>1</td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td>
                <img src="https://picsum.photos/200" width="50" height="50" alt="">
            </td>
            <td>
                078908765
            </td>
            <td>
                Ivriel Gunawan
            </td>
            <td>
                ivrielgunawan@gmail.com
            </td>
            <td>RPL</td>
        </tr>
    </table>
</body>
</html>