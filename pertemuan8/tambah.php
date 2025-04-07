<?php
require 'functions.php'; // memanggil file functions.php yang berisi logika logika

if (isset($_POST['submit'])) {
    // var_dump($_POST);
    // var_dump($_FILES); // menampilkan data file yang diupload
    // die; // ketika sudah tampil, script dibawahnya tidak dijalankan
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'latihan1.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'latihan1.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul style="list-style-type: none;">
            <li>
                <label for="nrp">NRP:</label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan:</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar:</label>
                <input type="file" name="gambar" id="gambar">
                <span style="color: gray;">Maks. 1MB</span>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
    <a href="latihan1.php">Kembali ke Daftar Mahasiswa</a>
</body>

</html>