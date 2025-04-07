<?php
require 'functions.php'; // memanggil file functions.php yang berisi logika logika

$id = $_GET["id"]; // ambil id dari URL

// query data mahasiswa berdasarkan id
$mhs= query("SELECT * FROM mahasiswa WHERE id = $id")[0]; // ambil data mahasiswa berdasarkan id

if (isset($_POST['submit'])) { // cek apakah tombol submit sudah ditekan atau belum
    $_POST['id'] = $id; 
    if (ubah($_POST) > 0) {
        echo "<script>
            alert('Data berhasil diubah!');
            document.location.href = 'latihan1.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal diubah!');
            document.location.href = 'latihan1.php';
        </script>";
        echo mysqli_error($dbconection); // menampilkan error jika ada kesalahan
    }
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
</head>

<body>
    <h1>Update Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs['gambar']; ?>">
        <ul style="list-style-type: none;">
            <li>
                <label for="nrp">NRP:</label>
                <input type="text" name="nrp" id="nrp"  value="<?= $mhs["nrp"]; ?>">
            </li>
            <li>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama"  value="<?= $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email"  value="<?= $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan:</label>
                <input type="text" name="jurusan" id="jurusan"  value="<?= $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar:</label>
                <img src="<?= $mhs['gambar']; ?>" width="50" height="50" alt="Current Image">
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
    <a href="latihan1.php">Kembali ke Daftar Mahasiswa</a>
</body>

</html>