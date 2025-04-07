<?php
// variabel scope atau lingkup variabel : global
// superglobals variabel yang sudah dimiliki oleh php dan bisa digunakan di file manapun di project php kita
// $x  = 10; 
// function tampilX (){
//     global $x;
//     echo $x;
// }
// tampilX();
// echo "<br>";

// $_GET["nama"];
// $_GET["nrp"];
// var_dump($_GET)

$mahasiswa = [//array numerik
    [
        // array associative
        "nama" => "Sandhika Galih",
        "nrp" => "345678999",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "tugas" => [90, 80, 100],
        "gambar" => "https://picsum.photos/200"
    ],
    [
        "nama" => "Sandhika",
        "nrp" => "345678999",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "tugas" => [80, 100, 20],
        "gambar" => "https://picsum.photos/300"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs): ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"];?>&nrp=<?= $mhs["nrp"]?>&email=<?= $mhs["email"]?>&jurusan=<?= $mhs["jurusan"]?>&gambar=<?= $mhs["gambar"]?>">
                    <?= $mhs['nama']?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>