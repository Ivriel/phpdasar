<?php
    // $mahasiswa = [
    //     ["Sandhika Galih","0542345","sandhikagalih","teknik informatika"],
    //     ["Sandhika Galih","0542345","sandhikagalih","teknik informatika"]
    // ]
    // array associative key nya adalah string yang kita buat sendiri. jadi kayak JSON

    $mahasiswa = [//array numerik
        [
            // array associative
        "nama" => "Sandhika Galih",
        "nrp" => "345678999",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "tugas" => [90,80,100],
        "gambar" => "https://picsum.photos/200"
        ],
        [
            "nama" => "Sandhika",
            "nrp" => "345678999",
            "email" => "sandhikagalih@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "tugas" =>[80,100,20],
            "gambar" => "https://picsum.photos/300"
            ],
    ];
    echo $mahasiswa[1]["tugas"][0]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li><?= $mhs["nama"]?></li>
        <li><?= $mhs["nrp"]?></li>
        <li><?= $mhs["email"]?></li>
        <li><?= $mhs["jurusan"]?></li>
        <li><?php print_r($mhs["tugas"]) ?></li>
        <li>
            <img src="<?= $mhs["gambar"]?>" alt="">
        </li>
    </ul>
    <?php endforeach?>

</body>
</html>