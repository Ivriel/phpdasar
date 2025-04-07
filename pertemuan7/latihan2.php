<?php // cek apakah ada data yang dikirim melalui url
if (
    !isset($_GET["nama"]) ||
    !isset($_get["nrp"]) ||
    !isset($_get["email"]) ||
    !isset($_get["jurusan"]) || 
    !isset($_get["gambar"])
) {
    // redirect to another page
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Detail Mahasiswa</h1>
    <ul>
        <li><img src="<?= $_GET["gambar"] ?>" alt=""></li>
        <li><?= $_GET["nama"] ?></li>
        <li><?= $_GET["email"] ?></li>
        <li><?= $_GET["nrp"] ?></li>
        <li><?= $_GET["jurusan"] ?></li>
    </ul>
    <a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>

</html>